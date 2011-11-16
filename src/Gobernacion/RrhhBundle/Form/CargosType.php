<?php

namespace Gobernacion\RrhhBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CargosType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('sueldo')
        ;
    }

    public function getName()
    {
        return 'gobernacion_rrhhbundle_cargostype';
    }
}
