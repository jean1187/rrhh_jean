<?php

namespace Configuration\GralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration\GralBundle\Entity\Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity
 */
class Menu
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=30, nullable=false)
     */
    private $nombre;

    /**
     * @var string $uri
     *
     * @ORM\Column(name="uri", type="string", length=200)
     */
    private $uri;

    /**
     * @var integer $parent
     *
     * @ORM\Column(name="parent", type="integer",nullable=true)
     */

    private $parent;

    /**
     * @var text $roles
     *
     * @ORM\Column(name="roles", type="text",nullable=true)
     */
    private $roles;

    /**
     * Get nombres de los demas items del menu
     *
     * @return integer 
     */
    public function getSelectParent(){
        return $this->getNombre();
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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre( $nombre)
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
     * Set uri
     *
     * @param string $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * Get uri
     *
     * @return string 
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set roles
     *
     * @param text $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * Get roles
     *
     * @return text 
     */
    public function getRoles()
    {
        return $this->roles;
    }
}