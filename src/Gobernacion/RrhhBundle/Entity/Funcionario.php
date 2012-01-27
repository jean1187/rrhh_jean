<?php

namespace Gobernacion\RrhhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gobernacion\RrhhBundle\Entity\Funcionario
 *
 * @ORM\Table(name="funcionario")
 * @ORM\Entity
 */
class Funcionario
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
     * @var date $fchIngreso
     *
     * @ORM\Column(name="fch_ingreso", type="date", nullable=false)
     */
    private $fchIngreso;

    /**
     * @var text $direccionE
     *
     * @ORM\Column(name="direccion_e", type="text", nullable=true)
     */
    private $direccionE;

    /**
     * @var text $contactoE
     *
     * @ORM\Column(name="contacto_e", type="text", nullable=true)
     */
    private $contactoE;

    /**
     * @var boolean $vivienda
     *
     * @ORM\Column(name="vivienda", type="boolean", nullable=true)
     */
    private $vivienda;

    /**
     * @var boolean $vehiculo
     *
     * @ORM\Column(name="vehiculo", type="boolean", nullable=true)
     */
    private $vehiculo;

    /**
     * @var Persona
     *
     * @ORM\OneToOne(targetEntity="Persona", inversedBy="funcionario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     * })
     */
    private $persona;

    /**
     * @var EstadoCivil
     *
     * @ORM\ManyToOne(targetEntity="EstadoCivil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_civil_id", referencedColumnName="id")
     * })
     */
    private $estadoCivil;

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
     * @var Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lateralidad_id", referencedColumnName="id")
     * })
     */
    private $lateralidad;

    /**
     * @var TipoFuncionario
     *
     * @ORM\ManyToOne(targetEntity="TipoFuncionario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_funcionario_id", referencedColumnName="id")
     * })
     */
    private $tipoFuncionario;



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
     * Set fchIngreso
     *
     * @param date $fchIngreso
     */
    public function setFchIngreso($fchIngreso)
    {
        $this->fchIngreso = $fchIngreso;
    }

    /**
     * Get fchIngreso
     *
     * @return date 
     */
    public function getFchIngreso()
    {
        return $this->fchIngreso;
    }

    /**
     * Set direccionE
     *
     * @param text $direccionE
     */
    public function setDireccionE($direccionE)
    {
        $this->direccionE = $direccionE;
    }

    /**
     * Get direccionE
     *
     * @return text 
     */
    public function getDireccionE()
    {
        return $this->direccionE;
    }

    /**
     * Set contactoE
     *
     * @param text $contactoE
     */
    public function setContactoE($contactoE)
    {
        $this->contactoE = $contactoE;
    }

    /**
     * Get contactoE
     *
     * @return text 
     */
    public function getContactoE()
    {
        return $this->contactoE;
    }

    /**
     * Set vivienda
     *
     * @param boolean $vivienda
     */
    public function setVivienda($vivienda)
    {
        $this->vivienda = $vivienda;
    }

    /**
     * Get vivienda
     *
     * @return boolean 
     */
    public function getVivienda()
    {
        return $this->vivienda;
    }

    /**
     * Set vehiculo
     *
     * @param boolean $vehiculo
     */
    public function setVehiculo($vehiculo)
    {
        $this->vehiculo = $vehiculo;
    }

    /**
     * Get vehiculo
     *
     * @return boolean 
     */
    public function getVehiculo()
    {
        return $this->vehiculo;
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
     * Set estadoCivil
     *
     * @param Gobernacion\RrhhBundle\Entity\EstadoCivil $estadoCivil
     */
    public function setEstadoCivil(\Gobernacion\RrhhBundle\Entity\EstadoCivil $estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }

    /**
     * Get estadoCivil
     *
     * @return Gobernacion\RrhhBundle\Entity\EstadoCivil 
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
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

    /**
     * Set lateralidad
     *
     * @param Gobernacion\RrhhBundle\Entity\Status $lateralidad
     */
    public function setLateralidad(\Gobernacion\RrhhBundle\Entity\Status $lateralidad)
    {
        $this->lateralidad = $lateralidad;
    }

    /**
     * Get lateralidad
     *
     * @return Gobernacion\RrhhBundle\Entity\Status 
     */
    public function getLateralidad()
    {
        return $this->lateralidad;
    }

    /**
     * Set tipoFuncionario
     *
     * @param Gobernacion\RrhhBundle\Entity\TipoFuncionario $tipoFuncionario
     */
    public function setTipoFuncionario(\Gobernacion\RrhhBundle\Entity\TipoFuncionario $tipoFuncionario)
    {
        $this->tipoFuncionario = $tipoFuncionario;
    }

    /**
     * Get tipoFuncionario
     *
     * @return Gobernacion\RrhhBundle\Entity\TipoFuncionario 
     */
    public function getTipoFuncionario()
    {
        return $this->tipoFuncionario;
    }
}