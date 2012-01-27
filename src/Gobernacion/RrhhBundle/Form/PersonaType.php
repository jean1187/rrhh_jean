<?php

namespace Gobernacion\RrhhBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PersonaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('cedula')
            ->add('nombre')
            ->add('apellido')
            ->add('sexo', 'choice', array(
                          'empty_value' => ' Seleccione ',
                          'choices'   => array('M' => 'Masculino', 'f' => 'Femenino'),
                    ))
            ->add('tlfCelular',null,array("label"=>"Tlf. Celular"))
            ->add('tlfHabitacion',null,array("label"=>"Tlf. Habitacion"))
            ->add('direccion')
            ->add('fchCre')
            ->add('fchModif')
            ->add('nivelAcademico',null,array('property'=>"select_nivel_academico"))
            ->add('status','entity', array(
                                'property'=>"status_select",
                                'class'         => 'Gobernacion\\RrhhBundle\\Entity\\Status',
                                'query_builder' => function ($repositorio) {
                                  return $repositorio->createQueryBuilder('st')->where("st.catStatus = :cat_status")->setParameter('cat_status',2);
                            }))
        ;
    }

    public function getName()
    {
        return 'gobernacion_rrhhbundle_personatype';
    }
}
