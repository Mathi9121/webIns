<?php
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new OCIM\EvenementsBundle\OCIMEvenementsBundle(),
            new OCIM\UserBundle\OCIMUserBundle(),
            new OCIM\ExportBundle\OCIMExportBundle(),
            new OCIM\ContactsBundle\OCIMContactsBundle(),
            new Knp\Bundle\SnappyBundle\KnpSnappyBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new FR3D\LdapBundle\FR3DLdapBundle(),
        );
        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }
        return $bundles;
    }
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
    public function getRootDir()
    {
        return __DIR__;
    }
    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }
    
    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }
}
