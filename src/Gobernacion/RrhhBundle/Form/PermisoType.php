<?php

namespace Gobernacion\RrhhBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PermisoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            
            ->add('motivo')
            ->add('fchSolicitud')
            ->add('fchPermiso')
            ->add('fchDesde')
            ->add('fchHasta')
            ->add('fchFinal')  
            ->add('funcionario',null,array("property"=>"funcionarios"))    
        ;
    }

    public function getName()
    {
        return 'gobernacion_rrhhbundle_permisotype';
    }
}
