<?php

namespace Gobernacion\RrhhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gobernacion\RrhhBundle\Entity\Status
 *
 * @ORM\Table(name="status")
 * @ORM\Entity
 */
class Status
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
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var CatStatus
     *
     * @ORM\ManyToOne(targetEntity="CatStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_status_id", referencedColumnName="id")
     * })
     */
    private $catStatus;

    public function getStatusSelect()
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
     * Set catStatus
     *
     * @param Gobernacion\RrhhBundle\Entity\CatStatus $catStatus
     */
    public function setCatStatus(\Gobernacion\RrhhBundle\Entity\CatStatus $catStatus)
    {
        $this->catStatus = $catStatus;
    }

    /**
     * Get catStatus
     *
     * @return Gobernacion\RrhhBundle\Entity\CatStatus 
     */
    public function getCatStatus()
    {
        return $this->catStatus;
    }
}