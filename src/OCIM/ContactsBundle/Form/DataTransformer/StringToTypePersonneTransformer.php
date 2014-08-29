<?php
namespace OCIM\ContactsBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\TaskBundle\Entity\Issue;

class StringToTypePersonneTransformer implements DataTransformerInterface
{
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    /**
     * Transforms an object (type) to a string (string).
     *
     * @param  Issue|null $issue
     * @return string
     */
    public function transform($type)
    {
        if (null === $type) {
            return "";
        }

        return $type->getType();
    }

    /**
     * Transforms a string (str) to an object (type).
     *
     * @param  string $number
     * @return Issue|null
     * @throws TransformationFailedException if object (issue) is not found.
     */
    public function reverseTransform($str)
    {
        if (!$str) {
            return null;
        }

        $type = $this->om
            ->getRepository('OCIMContactsBundle:TypePersonne')
            ->findOneBy(array('type' => $str))
        ;

        return $type;
    }
}