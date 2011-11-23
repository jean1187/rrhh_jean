<?php

namespace Gobernacion\RrhhBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PermisoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
//             ->add('persona','entity',array('property'=>"find_personas_not_uncionarios",
//                     'class' => 'GobernacionRrhhBundle:Persona',
//                      'query_builder' => function($repo){
//            
//                                return  $repo->createQueryBuilder('p')->select("p,f")->leftJoin('p.funcionario','f')->leftJoin('p.beneficiario','b')->where("f.lateralidad is null and b.persona is null");
//                    
//                    }
//             ))
            ->add('motivo')
            ->add('fchSolicitud')
            ->add('fchPermiso')
            ->add('fchDesde')
            ->add('fchHasta')
            ->add('fchFinal')   
        ;
    }

    public function getName()
    {
        return 'gobernacion_rrhhbundle_permisotype';
    }
}
