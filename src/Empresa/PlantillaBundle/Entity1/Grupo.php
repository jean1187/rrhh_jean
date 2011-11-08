<?php
namespace Empresa\PlantillaBundle\Entity;

use FOS\UserBundle\Entity\Group as BaseGrupo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_grupo")
 */
class Grupo extends BaseGrupo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
     protected $id;

}
