<?php

namespace Gobernacion\RrhhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gobernacion\RrhhBundle\Entity\TitulosPersona
 *
 * @ORM\Table(name="titulos_persona")
 * @ORM\Entity
 */
class TitulosPersona
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
     * @var Titulos
     *
     * @ORM\ManyToOne(targetEntity="Titulos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titulos_id", referencedColumnName="id")
     * })
     */
    private $titulos;

    /**
     * @var Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     * })
     */
    private $persona;

    /**
     * @var Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;



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
     * Set titulos
     *
     * @param Gobernacion\RrhhBundle\Entity\Titulos $titulos
     */
    public function setTitulos(\Gobernacion\RrhhBundle\Entity\Titulos $titulos)
    {
        $this->titulos = $titulos;
    }

    /**
     * Get titulos
     *
     * @return Gobernacion\RrhhBundle\Entity\Titulos 
     */
    public function getTitulos()
    {
        return $this->titulos;
    }

    /**
     * Set persona
     *
     * @param Gobernacion\RrhhBundle\Entity\Persona $persona
     */
    public function setPersona(\Gobernacion\RrhhBundle\Entity\Persona $persona)
    {
        $this->persona = $persona;
    }

    /**
     * Get persona
     *
     * @return Gobernacion\RrhhBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set status
     *
     * @param Gobernacion\RrhhBundle\Entity\Status $status
     */
    public function setStatus(\Gobernacion\RrhhBundle\Entity\Status $status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return Gobernacion\RrhhBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }
}