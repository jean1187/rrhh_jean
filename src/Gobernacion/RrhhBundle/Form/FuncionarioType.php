<?php

namespace Gobernacion\RrhhBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class FuncionarioType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('fchIngreso')
            ->add('direccionE')
            ->add('contactoE')
            ->add('vivienda')
            ->add('vehiculo')
            ->add('persona')
            ->add('estadoCivil')
            ->add('status')
            ->add('lateralidad')
            ->add('tipoFuncionario')
        ;
    }

    public function getName()
    {
        return 'gobernacion_rrhhbundle_funcionariotype';
    }
}
