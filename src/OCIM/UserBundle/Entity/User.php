<?php

namespace OCIM\UserBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\Role;
use FOS\UserBundle\Model\User as BaseUser;
use FR3D\LdapBundle\Model\LdapUserInterface as LdapUserInterface;

/**
 * User
 */
class User extends BaseUser implements LdapUserInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $dn;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $nom;

    /*
     * @var string
     */
    protected $prenom;

    /**
     * @var string
     */
//    private $mail;

    /**
     * @var string
     */
  //  private $mdp;

    /**
     * @var boolean
     */
 //   private $admin;

    public function __construct()
    {
        parent::__construct();
        if (empty($this->roles)) {
            $this->roles[] = 'ROLE_USER';
        }
    }


    /**
     * Get id
     *
     * @return integer 
     */
  //  public function getId()
    //{
      //  return $this->id;
   // }

    /**
     * Set dn
     *
     * @param string $dn
     * @return User
     */
    public function setDn($dn)
    {
        $this->dn = $dn;

//        return $this;
    }

    /**
     * Get dn
     *
     * @return string
     */
    public function getDn()
    {
        return $this->dn;
    }

 public function setNom($nom)
    {
        $this->nom = $nom;

//        return $this;
    }

    /**
     * Get dn
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }



    /**
     * 
     */
     public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

//        return $this;
    }

    /**
     * Get dn
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

  //      return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
  //  public function getName()
    //{
      //  return $this->name;
  //  }

    /**
     * Set language
     *
     * @param string $language
     * @return User
     */
    public function setLanguage($language)
    {
        $this->language = $language;

    //    return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
//    public function getLanguage()
  //  {
    //    return $this->language;
  //  }

    /**
     * Set mail
     *
     * @param string @mail
     * @return User
     */
    //public function setMail($mail)
 //   {
   //     $this->mail = $mail;

     //   return $this;
  //  }

    /**
     * Get mail
     *
     * @return string
     */
  //  public function getMail()
   // {
     //   return $this->mail;
  //  }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return User
     */
//    public function setMdp($mdp)
  //  {
    //    $this->mdp = base64_encode(hash('sha512', $mdp, true));

      //  return $this;
   // }

    /**
     * Get mdp
     *
     * @return string 
     */
   // public function getMdp()
    //{
      //  return $this->mdp;
    //}

    /**
     * Set admin
     *
     * @param boolean $admin
     * @return User
     */
//    public function setAdmin($admin)
  //  {
    //    $this->admin = $admin;

      //  return $this;
  //  }

    /**
     * Get admin
     *
     * @return boolean 
     */
  //  public function getAdmin()
    //{
      //  return $this->admin;
 //   }

//	public function getUsername(){
//		return $this->getLogin();
//	}

//	public function getSalt(){
//		return "";
//	}

//	public function getRoles(){
//		return array(new Role("ROLE_ADMIN"));
//	}

//	public function eraseCredentials(){

//	}

    /**
     * @var string
     */
  //  private $login;


    /**
     * Set login
     *
     * @param string $login
     * @return User
     */
 //   public function setLogin($login)
   // {
     //   $this->login = $login;

       // return $this;
  //  }

    /**
     * Get login
     *
     * @return string 
     */
 //   public function getLogin()
   // {
     //   return $this->login;
  //  }
}
