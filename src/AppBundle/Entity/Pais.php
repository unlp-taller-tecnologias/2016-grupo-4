<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="pais")
 * @ORM\Entity()
  * @ORM\HasLifecycleCallbacks
 */
class Pais
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
     * @ORM\Column(name="nombre", type="string", length=50, unique=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=3, unique=true)
     */
    private $codigo;

	/**
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;
	
	/**
     * @ORM\Column(type="string", length=50)
     */
    protected $usuarioCreacion;	


	/**
     * @ORM\Column(type="string", length=50)
     */
    protected $usuarioModificacion;
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
     * @return Pais
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
     * Set codigo
     *
     * @param string $codigo
     * @return Pais
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
	
	
	public function __construct()
    {
        $this->createdAt= new \DateTime();
        $this->updatedAt= new \DateTime();
    }

    /**
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        $this->updatedAt= new \DateTime();
    }
	
	
	public function __toString()
	{
		return $this->nombre;
	}

		public function getUsuarioCreacion()
    {
        return $this->usuarioCreacion;
    }
	
	public function setUsuarioCreacion($user)
    {
        $this->usuarioCreacion = $user;
    }
	
	
	public function getUsuarioModificacion()
    {
        return $this->usuarioModificacion;
    }
	
	public function setUsuarioModificacion($user)
    {
        $this->usuarioModificacion = $user;
    }
	
	
	
}