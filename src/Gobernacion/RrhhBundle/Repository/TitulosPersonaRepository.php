<?php

namespace Gobernacion\RrhhBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TitulosPersonaRepository extends EntityRepository
{
    /**
     * Devuelve todos los Funcionarios
     *
     */
    public function findTitulosPersona($titulo)
    {
        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder()
            ->select('Cd')
            ->from('GobernacionRrhhBundle:TitulosPersona', 'Cd')
            ->where('Cd.titulos = :titulos')
            ->setParameter('titulos',$titulo)
            ->getQuery();
        return $query->getResult();
    }
    
}//Fin Repository
