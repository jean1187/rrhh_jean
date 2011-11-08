<?php

namespace Empresa\PlantillaBundle\Entity;
use FOS\UserBundle\Entity\User as UsuarioBase;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa\Plantilla\Entity\Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario extends UsuarioBase
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Empresa\PlantillaBundle\Entity\Grupo")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;    


    public function __construct()
    {
        parent::__construct();
        // tu propia lógica
    }
 

}
