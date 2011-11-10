<?php

namespace Gobernacion\RrhhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gobernacion\RrhhBundle\Entity\Vacaciones
 *
 * @ORM\Table(name="vacaciones")
 * @ORM\Entity
 */
class Vacaciones
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
     * @var date $fchIni
     *
     * @ORM\Column(name="fch_ini", type="date", nullable=true)
     */
    private $fchIni;

    /**
     * @var date $fchHasta
     *
     * @ORM\Column(name="fch_hasta", type="date", nullable=true)
     */
    private $fchHasta;

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
     * @var boolean $tomadas
     *
     * @ORM\Column(name="tomadas", type="boolean", nullable=false)
     */
    private $tomadas;

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
     * Set fchIni
     *
     * @param date $fchIni
     */
    public function setFchIni($fchIni)
    {
        $this->fchIni = $fchIni;
    }

    /**
     * Get fchIni
     *
     * @return date 
     */
    public function getFchIni()
    {
        return $this->fchIni;
    }

    /**
     * Set fchHasta
     *
     * @param date $fchHasta
     */
    public function setFchHasta($fchHasta)
    {
        $this->fchHasta = $fchHasta;
    }

    /**
     * Get fchHasta
     *
     * @return date 
     */
    public function getFchHasta()
    {
        return $this->fchHasta;
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
     * Set tomadas
     *
     * @param boolean $tomadas
     */
    public function setTomadas($tomadas)
    {
        $this->tomadas = $tomadas;
    }

    /**
     * Get tomadas
     *
     * @return boolean 
     */
    public function getTomadas()
    {
        return $this->tomadas;
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