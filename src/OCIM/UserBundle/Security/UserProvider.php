<?php

namespace OCIM\UserBundle\Security;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Ldap\LdapInterface;
use Symfony\Component\Ldap\Exception\ConnectionException;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use OCIM\UserBundle\Entity\User;
use Symfony\Component\Ldap\Entry;

class UserProvider implements UserProviderInterface
{

    private $ldap;
    private $baseDn;
    private $searchDn;
    private $searchPassword;
    private $filterAdmin;
    private $em;

    /**
     *
     */
    public function __construct(LdapInterface $ldap, $baseDn, $searchDn = null, $searchPassword = null, EntityManager $em, $filterAdmin = '(memberUid={username})')
    {
        $this->ldap = $ldap;
        $this->baseDn = $baseDn;
        $this->searchDn = $searchDn;
        $this->searchPassword = $searchPassword;
        $this->filterAdmin = $filterAdmin;
        $this->em = $em;
    }

    /**
     *
     */
    public function loadUserByUsername($username)
    {
        try {
            $this->ldap->bind($this->searchDn, $this->searchPassword);
            $username = $this->ldap->escape($username, '', LdapInterface::ESCAPE_FILTER);
            $query = str_replace('{username}', $username, $this->defaultSearch);
            $search = $this->ldap->query($this->baseDn, $query);
        }catch(ConnectionException $e){
            throw new UsernameNotFoundException(sprintf('User "%s" not found.', $username), 0, $e);
        }
        return $this->loadUser($username, entries[0]);
    }

    /**
     *
     */
    public function refreshUser(UserInterface $user)
    {
        if(!$user instanceof User){
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }
        $userRepository = $this->em->getRepository("OCIMUserBundle:User");
        $user = $userRepository->findOneBy(array("username" => $user->getUsername()));
        if($user === null){
            throw new UnsupportedUserException(sprintf('Instan'))
        }
    }

    /**
     *
     */
    public function loadUser($username, Entry $entry)
    {
        $userRepository = $this->em->getRepository("OCIMUserBundle:User");
        $user = $userRepository->findOneBy(array("username" => $username));

        if($user == null)
        {
            $user = new User();
            $user->setFirstName($entry->getAttribute("givenName")[0]);
            $user->setLastname($entry->getAttribute("sn")[0]);
            $user->setRoles($this->defaultRoles);

            $this->em->persist($user);
            $this->em->flush();
        }else{
            $this->em->flush();
        }
        return $user;
    }

}
