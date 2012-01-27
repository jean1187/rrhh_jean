<?php
namespace Configuration\GralBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Configuration\GralBundle\Resources\util\Util;

use Configuration\GralBundle\Entity\Grupo;
use Configuration\GralBundle\Entity\Usuario;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadInicial extends AbstractFixture implements OrderedFixtureInterface,ContainerAwareInterface
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

      
        // -- Cargar Usuarios ----------------------------------------
        $roles=array("ROLE_MEMBER","ROLE_ADMIN","ROL_SUPER_ADMIN","ROLE_JEAN");
        $grupo = new Grupo("Roles-Basicos",$roles);
        $manager->persist($grupo);    
        for($i=1;$i<=3;$i++)
        {
             
             /*$user = new Usuario();
            $user->setEmail('john@example.com');
            $user->setUsername('admin'.$i);
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
            $user->setPassword($encoder->encodePassword('test',$user->getSalt()));*/
            $user=$this->container->get('fos_user.user_manager')->createUser();
            $user->setEmail('john@example.com'.$i);
            $user->setUsername('admin'.$i);
            $user->setEnabled(true);
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
            $user->setPassword($encoder->encodePassword('test',$user->getSalt()));
            $user->addGroup($grupo);
            //$user->addRole($roles[$i-1]);
            //if($i==2)
            //$user->addRole("ROLE_PRUEBA");
            //$user->setSalt(md5(time()));

            // encode and set the password for the user,
            // these settings match our config
           // $encoder = new MessageDigestPasswordEncoder();
            //$password = $encoder->encodePassword('admin'.$i, $user->getSalt());
           // $user->setPassword('admin');
            //$user->getUserRoles()->add($role);
            $this->addReference("user_Fos_USER_BUNDLE".$i, $user);
            //$user->setStatus($manager->merge($this->getReference("status00")));
            $manager->persist($user);
        }
        
      

    //finalmente se cargan los datos
            $manager->flush();
   }//fin load

    
    

    
    public function getOrder()
    {
        return 1;
    }
    
}//fin class
