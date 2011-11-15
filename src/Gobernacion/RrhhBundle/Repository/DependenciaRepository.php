<?php

namespace Gobernacion\RrhhBundle\Repository;

use Doctrine\ORM\EntityRepository;

class DependenciaRepository extends EntityRepository
{
    /**
     * Devuelve todos las dependencias de una direccion
     *
     */
    public function findDep($dir)
    {
        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder()
            ->select('d')
            ->from('GobernacionRrhhBundle:Dependencia', 'd')
            ->where('d.direccion = :direccion')
            ->setParameter('direccion',$dir)
            ->getQuery();
        return $query->getResult();
    }
     
}//Fin Repository
