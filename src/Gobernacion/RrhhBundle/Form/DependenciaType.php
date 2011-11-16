<?php

namespace Gobernacion\RrhhBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DependenciaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('direccion')
        ;
    }

    public function getName()
    {
        return 'gobernacion_rrhhbundle_dependenciatype';
    }
}
