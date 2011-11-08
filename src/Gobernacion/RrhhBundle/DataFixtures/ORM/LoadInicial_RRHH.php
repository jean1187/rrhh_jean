<?php
namespace Gobernacion\RrhhBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Configuration\GralBundle\Resources\util\Util;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadInicial_RRHH extends AbstractFixture implements OrderedFixtureInterface,ContainerAwareInterface
{

    protected $manager;
    protected $cantidad_componentes_a_insertar;

    private $container;
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    
    public function load($manager)
    {
                
        $this->manager = $manager;

    //finalmente se cargan los datos
//            $manager->flush();
   }//fin load

    public function getOrder()
    {
		//primero se carga el load de ConfigurationGral y luego este bundle
        return 2;
    }
    
}//fin class LoadInicial_RRHH
