<?php
// src/Configuration/GralBundle/Menu/Builder.php
namespace Configuration\GralBundle\Menu;
use Knp\Menu\FactoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
        
class Builder  extends Controller
{
    //private $MenuObj;
    public function MenuPrincipal(FactoryInterface $factory)
    {
        $menu = $factory->createItem('Menu',array('attributes' => array('class' => 'menu')));
      
        $menu->addChild('Inicio', array('uri'=>'/'));
        $em = $this->getDoctrine()->getEntityManager();
        $securityContext = $this->container->get('security.context');
        $user = $securityContext->getToken()->getUser();
        $menu_orm = $em->getRepository('ConfigurationGralBundle:Menu');
            foreach ( $menu_orm->findAllNoHijos() as $valor) 
                 $this->Recursividad_Hijos_Padres($menu,$valor,$menu_orm,$user);
           
      //  if ( $this->get('security.context')->isGranted("SUPER_ADMIN")) {           
                $menu->addChild('Configuration', array('attributes'=>array('class' => 'parent')));
                $menu['Configuration']->addChild('Menu', array('route' => 'config_menu'));
                $menu['Configuration']->addChild('Usuarios', array('uri' => '#'));
        //}//fin SUPER_ADMIN
        
        $menu->addChild('Salir', array('route' => 'fos_user_security_logout'));
        return $menu;
    }
    
    private function Uri_Route($array,$uri)
    {      
        if($uri!="#")
            $array["route"]=$uri;
        else 
            $array["uri"]=$uri;
        return $array;
    }
    
    private function Recursividad_Hijos_Padres($menuOBJ,$element,$menu_orm,$user)
    {     
        if($hijos=$menu_orm->findAllHijos($element->getId()))
            {
             if($element->getRoles()==NULL || count(array_intersect(unserialize($element->getRoles()), $user->getRoles())) )
                {
                    $padre=$menuOBJ->addChild($element->getNombre(), $this->Uri_Route(array('attributes' => array('class' => 'parent')),$element->getUri()));
                    foreach($hijos as $valorH)
                        $this->Recursividad_Hijos_Padres($padre,$valorH,$menu_orm,$user);
                 }
            }
            else
                if($element->getRoles()==NULL ||  count(array_intersect(unserialize($element->getRoles()), $user->getRoles())) )
                    $menuOBJ->addChild($element->getNombre(), $this->Uri_Route(array(),$element->getUri()));
    }    
 
  
}
