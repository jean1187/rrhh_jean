<?php

namespace Configuration\GralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration\GralBundle\Entity\Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="Configuration\GralBundle\Entity\MenuRepository")
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
     * @ORM\Column(name="uri", type="string", length=200, nullable=true)
     */
    private $uri;

    /**
     * @var text $roles
     *
     * @ORM\Column(name="roles", type="text", nullable=true)
     */
    
    private $roles;

    /**
     * @var Menu
     *
     * @ORM\OneToOne(targetEntity="Menu")
     * @ORM\JoinColumn(name="parent", referencedColumnName="id")
     */
    private $parent;

    /**
     * @ORM\ManyToMany(targetEntity="Configuration\GralBundle\Entity\Grupo")
     * @ORM\JoinTable(name="menu_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;
    
    /**
     * Get getSelectParent
     *
     * @return String
     */
    public function __toString() {
             return $this->getNombre(). " id = ".$this->getId() ;
    }    

    /**
     * Get getselect_rutas
     *
     * @return String
     */
    public function getSelectRutas()
    {
        return $this->getNombre();
    }        
    

    /**
     * Get getSelectParent
     *
     * @return String
     */
    public function getSelectParent()
    {
        return $this->getNombre();
    }    

    /**
     * Get id
     *shipping_id
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
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**shipping_id
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
    
    /**
     * Set parent
     *
     * @param Configuration\GralBundle\Entity\Menu $parent
     */
    public function setParent( $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Configuration\GralBundle\Entity\Menu 
     */
    public function getParent()
    {
        return $this->parent;
    }
    
     /**
     * Get parent
     *
     * @return String
     */
    public function getParentS()
    {
        return $this->getNombre();
    }
    
    public function __construct()
    {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add groups
     *
     * @param Configuration\GralBundle\Entity\Grupo $groups
     */
    public function addGroups(\Configuration\GralBundle\Entity\Grupo $groups)
    {
        $this->groups[] = $groups;
    }

    /**
     * Get groups
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
