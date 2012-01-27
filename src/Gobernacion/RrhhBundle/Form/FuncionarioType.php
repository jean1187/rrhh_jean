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
            /*->add('persona','entity',array('property'=>"find_personas_not_uncionarios",
                'class'         => 'GobernacionRrhhBundle:Persona',
                ))*/
             ->add('persona','entity',array('property'=>"find_personas_not_uncionarios",
                     'class' => 'GobernacionRrhhBundle:Persona',
                'query_builder' => function( $repo){
            
                    return  $repo->createQueryBuilder('p')->select("p,f")->leftJoin('p.funcionario','f')->leftJoin('p.beneficiario','b')->where("f.lateralidad is null and b.persona is null");
                    
                    }
                ))
            ->add('estadoCivil',null,array('property'=>"edoCivil_personas"))
            ->add('status','entity', array(
                                'property'=>"status_select",
                                'class'         => 'Gobernacion\\RrhhBundle\\Entity\\Status',
                                'query_builder' => function ($repositorio) {
                                  return $repositorio->createQueryBuilder('st')->where("st.catStatus = :cat_status")->setParameter('cat_status',2);
                            }))
            ->add('lateralidad','entity', array(
                                'property'=>"status_select",
                                'class'         => 'Gobernacion\\RrhhBundle\\Entity\\Status',
                                'query_builder' => function ($repositorio) {
                                  return $repositorio->createQueryBuilder('st')->where("st.catStatus = :cat_status")->setParameter('cat_status',4);
                            }))
            ->add('tipoFuncionario',null,array('property'=>"select_tipoFun"))
        ;
    }

    public function getName()
    {
        return 'gobernacion_rrhhbundle_funcionariotype';
    }
}