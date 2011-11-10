<?php

namespace Gobernacion\RrhhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gobernacion\RrhhBundle\Entity\CargosDependencia
 *
 * @ORM\Table(name="cargos_dependencia")
 * @ORM\Entity
 */
class CargosDependencia
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
     * @var Cargos
     *
     * @ORM\ManyToOne(targetEntity="Cargos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cargos_id", referencedColumnName="id")
     * })
     */
    private $cargos;

    /**
     * @var Dependencia
     *
     * @ORM\ManyToOne(targetEntity="Dependencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dependencia_id", referencedColumnName="id")
     * })
     */
    private $dependencia;



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
     * Set cargos
     *
     * @param Gobernacion\RrhhBundle\Entity\Cargos $cargos
     */
    public function setCargos(\Gobernacion\RrhhBundle\Entity\Cargos $cargos)
    {
        $this->cargos = $cargos;
    }

    /**
     * Get cargos
     *
     * @return Gobernacion\RrhhBundle\Entity\Cargos 
     */
    public function getCargos()
    {
        return $this->cargos;
    }

    /**
     * Set dependencia
     *
     * @param Gobernacion\RrhhBundle\Entity\Dependencia $dependencia
     */
    public function setDependencia(\Gobernacion\RrhhBundle\Entity\Dependencia $dependencia)
    {
        $this->dependencia = $dependencia;
    }

    /**
     * Get dependencia
     *
     * @return Gobernacion\RrhhBundle\Entity\Dependencia 
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }
}