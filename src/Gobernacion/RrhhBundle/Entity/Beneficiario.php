<?php

namespace Gobernacion\RrhhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gobernacion\RrhhBundle\Entity\Beneficiario
 *
 * @ORM\Table(name="beneficiario")
 * @ORM\Entity
 */
class Beneficiario
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
     * @var Persona
     *
     * @ORM\OneToOne(targetEntity="Persona", inversedBy="beneficiario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     * })
     */
    private $persona;

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
     * @var Parentezco
     *
     * @ORM\ManyToOne(targetEntity="Parentezco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentezco_id", referencedColumnName="id")
     * })
     */
    private $parentezco;



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
     * Set parentezco
     *
     * @param Gobernacion\RrhhBundle\Entity\Parentezco $parentezco
     */
    public function setParentezco(\Gobernacion\RrhhBundle\Entity\Parentezco $parentezco)
    {
        $this->parentezco = $parentezco;
    }

    /**
     * Get parentezco
     *
     * @return Gobernacion\RrhhBundle\Entity\Parentezco 
     */
    public function getParentezco()
    {
        return $this->parentezco;
    }
}