<?php

namespace Configuration\GralBundle\Entity;

use Doctrine\ORM\EntityRepository;

class MenuRepository extends EntityRepository
{
    /**
     * Devuelve todos los items del menu que no tienen uri #
     *
     */
    public function findMenuesConUri()
    {
        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder()
            ->select('m')
            ->from('ConfigurationGralBundle:Menu', 'm')
            ->where('m.uri <> :uri')
            ->setParameter('uri','#')
            ->getQuery();
        return $query->getResult();
    }

     /**
     * Devuelve todos los items del menu Que son Padres
     *
     */
    public function findAllNoHijos()
    {
        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder()
            ->select('m')
            ->from('ConfigurationGralBundle:Menu', 'm')
            ->where('m.parent IS NULL')
            ->getQuery();
        return $query->getResult();
    }
     /**
     * Devuelve todos los items del menu Que son Hijos del Padre En Cuestion
     *
     */
    public function findAllHijos($parent)
    {
        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder()
            ->select('m')
            ->from('ConfigurationGralBundle:Menu', 'm')
            ->where('m.parent = :parent')
            ->setParameter("parent", $parent)
            ->getQuery();
        return $query->getResult();
    }    
}
