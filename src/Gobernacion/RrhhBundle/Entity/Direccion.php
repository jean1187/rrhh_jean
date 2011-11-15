<?php

namespace Gobernacion\RrhhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;

/**
 * Gobernacion\RrhhBundle\Entity\Direccion
 *
 * @ORM\Table(name="direccion")
  * @ORM\Entity(repositoryClass="Gobernacion\RrhhBundle\Repository\DireccionRepository")
 */
class Direccion
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
     * @ORM\Column(name="nombre", type="string", length=45)
     * @Assert\NotBlank()
     */
    private $nombre;

    public function __toString()
	{
		return $this->getNombre();  
	}

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
}
