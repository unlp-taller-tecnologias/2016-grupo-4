<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnidadCarga
 *
 * @ORM\Table(name="unidad_carga")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UnidadCargaRepository")
 * @ORM\HasLifecycleCallbacks
 */
class UnidadCarga
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

	/**
	* @ORM\ManyToOne(targetEntity="Localidad")
	*/
	protected $localidad;	
	
	/**
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;
		
	/**
    * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", inversedBy="unidades")
    * @ORM\JoinTable(name="unidades_users")
    **/
   private $users;
 
    /**
     * Tag constructor.
     */
    public function __construct() {
        $this->users = new ArrayCollection();

        $this->createdAt= new \DateTime();
        $this->updatedAt= new \DateTime();
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
     * @return UnidadCarga
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
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
     * Set localidad
     *
     * @param string $localidad
     * @return UnidadCarga
     */
    public function setLocalidad($localidad)
    {
        $this->nombre = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }
	
	
    /**
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        $this->updatedAt= new \DateTime();
    }	
	
}
