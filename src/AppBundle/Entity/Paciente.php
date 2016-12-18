<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Paciente
 *
 * @ORM\Table(name="paciente")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks
 * @UniqueEntity("numeroDocumento", message="Ya existe una paciente con el mismo documento.")
 */
class Paciente
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
     * @var int
     *
     * @ORM\Column(name="numeroDocumento", type="bigint", unique=true)
	 * @Assert\NotBlank()
     */
    private $numeroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50)
	 * @Assert\NotBlank()
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
	 * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaNacimiento", type="date")
	 * @Assert\NotBlank()
     * @Assert\Date()
     */
    private $fechaNacimiento;

	/**
	* @var string
	*
	*@ORM\Column(name="nacionalidad", type="string", length=50)
	* @Assert\NotBlank()
	*/
	protected $nacionalidad;

	/**
	* @var integer
	*
	* @ORM\ManyToOne(targetEntity="TipoDocumento")
	* @Assert\NotBlank()	
	*/
	
	protected $tipoDocumento;	
	
	/**
	* @ORM\ManyToOne(targetEntity="UnidadCarga")
	*/
	
	protected $unidadCarga;	

    /**
     *@ORM\OneToMany(targetEntity="Ficha", mappedBy="paciente", cascade={"persist"})
     */
	protected $fichas;

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
     * Set numeroDocumento
     *
     * @param integer $numeroDocumento
     * @return Paciente
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return integer 
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Paciente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
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
     * Set nombre
     *
     * @param string $nombre
     * @return Paciente
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
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Paciente
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
	
		 /**
     * Set nacionalidad

     *
     * @param string $nacionalidad
     * @return nacionalidad

     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;


        return $this;
    }

    /**
     * Get nacionalidad

     *
     * @return string 
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }
	
	/**
     * Set tipoDocumento
     *
     * @param string $tipoDocumento
     * @return tipoDocumento

     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return string 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }
	
	
		
	/**
     * Get unidadCarga
     *
     * @return integer 
     */
    public function getUnidadCarga()
    {
        return $this->unidadCarga;
    }

    /**
     * Set unidadCarga
     *
     * @param integer $unidadCarga
     * @return Paciente
     */
    public function setUnidadCarga($unidadCarga)
    {
        $this->unidadCarga = $unidadCarga;

        return $this;
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
		return $this;
    }
	
	public function getFichas()
	{
		return $this->fichas;		
	}
	
	//agrega una ficha
	public function setFichas($ficha)
	{
		$this->fichas->add($ficha);
		return $this;
	}
	
	
	public function __construct()
    {
        $this->createdAt= new \DateTime();
        $this->updatedAt= new \DateTime();
		$this->fichas = new ArrayCollection();
    }
}
