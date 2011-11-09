<?php

namespace Gobernacion\RrhhBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DireccionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
        ;
    }

    public function getName()
    {
        return 'gobernacion_rrhhbundle_direcciontype';
    }
}
