<?php

namespace Gobernacion\RrhhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gobernacion\RrhhBundle\Entity\FuncionarioCargosDependencia
 *
 * @ORM\Table(name="funcionario_cargos_dependencia")
 * @ORM\Entity
 */
class FuncionarioCargosDependencia
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
     * @var float $sueldo
     *
     * @ORM\Column(name="sueldo", type="float", nullable=true)
     */
    private $sueldo;

    /**
     * @var Funcionario
     *
     * @ORM\ManyToOne(targetEntity="Funcionario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="funcionario_id", referencedColumnName="id")
     * })
     */
    private $funcionario;

    /**
     * @var CargosDependencia
     *
     * @ORM\ManyToOne(targetEntity="CargosDependencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cargos_dependencia_id", referencedColumnName="id")
     * })
     */
    private $cargosDependencia;



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

    /**
     * Set funcionario
     *
     * @param Gobernacion\RrhhBundle\Entity\Funcionario $funcionario
     */
    public function setFuncionario(\Gobernacion\RrhhBundle\Entity\Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
    }

    /**
     * Get funcionario
     *
     * @return Gobernacion\RrhhBundle\Entity\Funcionario 
     */
    public function getFuncionario()
    {
        return $this->funcionario;
    }

    /**
     * Set cargosDependencia
     *
     * @param Gobernacion\RrhhBundle\Entity\CargosDependencia $cargosDependencia
     */
    public function setCargosDependencia(\Gobernacion\RrhhBundle\Entity\CargosDependencia $cargosDependencia)
    {
        $this->cargosDependencia = $cargosDependencia;
    }

    /**
     * Get cargosDependencia
     *
     * @return Gobernacion\RrhhBundle\Entity\CargosDependencia 
     */
    public function getCargosDependencia()
    {
        return $this->cargosDependencia;
    }
}