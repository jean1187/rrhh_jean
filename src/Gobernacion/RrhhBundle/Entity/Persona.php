<?php

namespace Gobernacion\RrhhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gobernacion\RrhhBundle\Entity\Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity
 */
class Persona
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
     * @var string $cedula
     *
     * @ORM\Column(name="cedula", type="string", length=10, nullable=true)
     */
    private $cedula;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string $apellido
     *
     * @ORM\Column(name="apellido", type="string", length=45, nullable=true)
     */
    private $apellido;

    /**
     * @var string $sexo
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var string $tlfCelular
     *
     * @ORM\Column(name="tlf_celular", type="string", length=11, nullable=true)
     */
    private $tlfCelular;

    /**
     * @var string $tlfHabitacion
     *
     * @ORM\Column(name="tlf_habitacion", type="string", length=11, nullable=true)
     */
    private $tlfHabitacion;

    /**
     * @var text $direccion
     *
     * @ORM\Column(name="direccion", type="text", nullable=true)
     */
    private $direccion;

    /**
     * @var datetime $fchCre
     *
     * @ORM\Column(name="fch_cre", type="datetime", nullable=false)
     */
    private $fchCre;

    /**
     * @var datetime $fchModif
     *
     * @ORM\Column(name="fch_modif", type="datetime", nullable=false)
     */
    private $fchModif;

    /**
     * @var NivelAcademico
     *
     * @ORM\ManyToOne(targetEntity="NivelAcademico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nivel_academico_id", referencedColumnName="id")
     * })
     */
    private $nivelAcademico;

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
     * @var funcionario
     *
     * @ORM\OneToOne(targetEntity="Funcionario", mappedBy="persona" )
     * 
     */    
    private $funcionario;
  

    /**
     * @var beneficiario
     *
     * @ORM\OneToOne(targetEntity="Beneficiario", mappedBy="persona" )
     * 
     */    
    private $beneficiario;    

    
    
    
    public function getFuncionario()
    {
        return $this->funcionario;
    }    
    
    
    public function getFindPersonasNotUncionarios()
    {
        return $this->getNombre()." ".$this->getApellido();
    }
    /**
     * Get Select Personas
     *
     * @return string
     */    
    public function getSelectPersonas()
    {
        return $this->getNombre()." ".$this->getApellido();
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
     * Set cedula
     *
     * @param string $cedula
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
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
     * Set apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set tlfCelular
     *
     * @param string $tlfCelular
     */
    public function setTlfCelular($tlfCelular)
    {
        $this->tlfCelular = $tlfCelular;
    }

    /**
     * Get tlfCelular
     *
     * @return string 
     */
    public function getTlfCelular()
    {
        return $this->tlfCelular;
    }

    /**
     * Set tlfHabitacion
     *
     * @param string $tlfHabitacion
     */
    public function setTlfHabitacion($tlfHabitacion)
    {
        $this->tlfHabitacion = $tlfHabitacion;
    }

    /**
     * Get tlfHabitacion
     *
     * @return string 
     */
    public function getTlfHabitacion()
    {
        return $this->tlfHabitacion;
    }

    /**
     * Set direccion
     *
     * @param text $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return text 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set fchCre
     *
     * @param datetime $fchCre
     */
    public function setFchCre($fchCre)
    {
        $this->fchCre = $fchCre;
    }

    /**
     * Get fchCre
     *
     * @return datetime 
     */
    public function getFchCre()
    {
        return $this->fchCre;
    }

    /**
     * Set fchModif
     *
     * @param datetime $fchModif
     */
    public function setFchModif($fchModif)
    {
        $this->fchModif = $fchModif;
    }

    /**
     * Get fchModif
     *
     * @return datetime 
     */
    public function getFchModif()
    {
        return $this->fchModif;
    }

    /**
     * Set nivelAcademico
     *
     * @param Gobernacion\RrhhBundle\Entity\NivelAcademico $nivelAcademico
     */
    public function setNivelAcademico(\Gobernacion\RrhhBundle\Entity\NivelAcademico $nivelAcademico)
    {
        $this->nivelAcademico = $nivelAcademico;
    }

    /**
     * Get nivelAcademico
     *
     * @return Gobernacion\RrhhBundle\Entity\NivelAcademico 
     */
    public function getNivelAcademico()
    {
        return $this->nivelAcademico;
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
     * Set funcionario
     *
     * @param Gobernacion\RrhhBundle\Entity\Funcionario $funcionario
     */
    public function setFuncionario(\Gobernacion\RrhhBundle\Entity\Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
    }

    /**
     * Set beneficiario
     *
     * @param Gobernacion\RrhhBundle\Entity\Beneficiario $beneficiario
     */
    public function setBeneficiario(\Gobernacion\RrhhBundle\Entity\Beneficiario $beneficiario)
    {
        $this->beneficiario = $beneficiario;
    }

    /**
     * Get beneficiario
     *
     * @return Gobernacion\RrhhBundle\Entity\Beneficiario 
     */
    public function getBeneficiario()
    {
        return $this->beneficiario;
    }
}