<?php

namespace Gobernacion\RrhhBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CargosDependenciaRepository extends EntityRepository
{
    /**
     * Devuelve todos los cargos de una dependencia dada
     *
     */
    public function findCargosDep($dep)
    {
        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder()
            ->select('Cd')
            ->from('GobernacionRrhhBundle:CargosDependencia', 'Cd')
            ->where('Cd.dependencia = :dependencia')
            ->setParameter('dependencia',$dep)
            ->getQuery();
        return $query->getResult();
    }
     
}//Fin Repository
