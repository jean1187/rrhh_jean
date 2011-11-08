<?php

namespace Configuration\GralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MenuType extends AbstractType  implements ContainerAwareInterface
{
        private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function buildForm(FormBuilder $builder, array $options)
    {
       //$menu=new MenuController();
        //$rutas_totales=$menu->rutasAction();
        //$this->setContainer(null);
        //$KOKO= array_keys($this->container->get('router')->getRouteCollection()->all());
        $builder
            ->add('nombre')
            //->add('uri')
            ->add('uri',"choice", array(
                    'choices'   => $options["rutas_totales"],
                    
            ))  
            ->add('parent',null,array(
                                'property'=>"select_parent",
                                'label'=>"Padre",
                                'empty_value' => '-- Seleccione --',
                                'required'=>false
                                ))
            ->add('roles')
            ->add('groups')
        ;
    }

    public function getName()
    {
        return 'configuration_gralbundle_menutype';
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'rutas_totales'     => array(),
        );
    }    
}

