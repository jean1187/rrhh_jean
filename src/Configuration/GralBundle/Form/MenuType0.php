<?php

namespace Configuration\GralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('uri')
            ->add('roles')
            ->add('parent')
            ->add('groups')
        ;
    }

    public function getName()
    {
        return 'configuration_gralbundle_menutype';
    }
}
