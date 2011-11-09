<?php

namespace Gobernacion\RrhhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gobernacion\RrhhBundle\Entity\Dependencia
 *
 * @ORM\Table(name="dependencia")
 * @ORM\Entity
 */
class Dependencia
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
     */
    private $nombre;

    /**
     * @var Direccion
     *
     * @ORM\ManyToOne(targetEntity="Direccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="direccion_id", referencedColumnName="id",nullable=false)
     * })
     */
    private $direccion;


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

    /**
     * Set direccion
     *
     * @param Gobernacion\RrhhBundle\Entity\Direccion $direccion
     */
    public function setDireccion(\Gobernacion\RrhhBundle\Entity\Direccion $direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return Gobernacion\RrhhBundle\Entity\Direccion 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
}
