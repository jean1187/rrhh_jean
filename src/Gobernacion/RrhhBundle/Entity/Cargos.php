<?php

namespace Gobernacion\RrhhBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;


use Doctrine\ORM\Mapping as ORM;

/**
 * Gobernacion\RrhhBundle\Entity\Cargos
 *
 * @ORM\Table(name="cargos")
 * @ORM\Entity(repositoryClass="Gobernacion\RrhhBundle\Repository\CargosDependenciaRepository")
 */
class Cargos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @var float $sueldo
     *
     * @ORM\Column(name="sueldo", type="float", nullable=false)
     * @Assert\NotBlank()
     */
    private $sueldo;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set sueldo
     *
     * @param float $sueldo
     */
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }

    /**
     * Get sueldo
     *
     * @return float 
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }
}