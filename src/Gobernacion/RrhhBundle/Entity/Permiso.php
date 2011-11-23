<?php

namespace Gobernacion\RrhhBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gobernacion\RrhhBundle\Entity\Permiso
 *
 * @ORM\Table(name="permiso")
 * @ORM\Entity
 */
class Permiso
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
     * @var text $motivo
     *
     * @ORM\Column(name="motivo", type="text", nullable=true)
     * @Assert\NotBlank()
     */
    private $motivo;

    /**
     * @var date $fchSolicitud
     *
     * @ORM\Column(name="fch_solicitud", type="date", nullable=true)
     */
    private $fchSolicitud;

    /**
     * @var date $fchPermiso
     *
     * @ORM\Column(name="fch_permiso", type="date", nullable=true)
     */
    private $fchPermiso;

    /**
     * @var datetime $fchDesde
     *
     * @ORM\Column(name="fch_desde", type="datetime", nullable=true)
     */
    private $fchDesde;

    /**
     * @var datetime $fchHasta
     *
     * @ORM\Column(name="fch_hasta", type="datetime", nullable=true)
     */
    private $fchHasta;

    /**
     * @var datetime $fchFinal
     *
     * @ORM\Column(name="fch_final", type="datetime", nullable=true)
     */
    private $fchFinal;

    /**
     * @var datetime $fchCre
     *
     * @ORM\Column(name="fch_cre", type="datetime", nullable=true)
     */
    private $fchCre;

    /**
     * @var datetime $fchModif
     *
     * @ORM\Column(name="fch_modif", type="datetime", nullable=true)
     */
    private $fchModif;

    /**
     * @var Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    
   private $status;
   
   public function __toString()
	{
		return $this->getNombre();  
	}
    
   

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set motivo
     *
     * @param text $motivo
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;
    }

    /**
     * Get motivo
     *
     * @return text 
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set fchSolicitud
     *
     * @param date $fchSolicitud
     */
    public function setFchSolicitud($fchSolicitud)
    {
        $this->fchSolicitud = $fchSolicitud;
    }

    /**
     * Get fchSolicitud
     *
     * @return date 
     */
    public function getFchSolicitud()
    {
        return $this->fchSolicitud;
    }

    /**
     * Set fchPermiso
     *
     * @param date $fchPermiso
     */
    public function setFchPermiso($fchPermiso)
    {
        $this->fchPermiso = $fchPermiso;
    }

    /**
     * Get fchPermiso
     *
     * @return date 
     */
    public function getFchPermiso()
    {
        return $this->fchPermiso;
    }

    /**
     * Set fchDesde
     *
     * @param datetime $fchDesde
     */
    public function setFchDesde($fchDesde)
    {
        $this->fchDesde = $fchDesde;
    }

    /**
     * Get fchDesde
     *
     * @return datetime 
     */
    public function getFchDesde()
    {
        return $this->fchDesde;
    }

    /**
     * Set fchHasta
     *
     * @param datetime $fchHasta
     */
    public function setFchHasta($fchHasta)
    {
        $this->fchHasta = $fchHasta;
    }

    /**
     * Get fchHasta
     *
     * @return datetime 
     */
    public function getFchHasta()
    {
        return $this->fchHasta;
    }

    /**
     * Set fchFinal
     *
     * @param datetime $fchFinal
     */
    public function setFchFinal($fchFinal)
    {
        $this->fchFinal = $fchFinal;
    }

    /**
     * Get fchFinal
     *
     * @return datetime 
     */
    public function getFchFinal()
    {
        return $this->fchFinal;
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
     * Get funcionario
     *
     * @return Gobernacion\RrhhBundle\Entity\Funcionario 
     */
    public function getFuncionario()
    {
        return $this->funcionario;
    }
}