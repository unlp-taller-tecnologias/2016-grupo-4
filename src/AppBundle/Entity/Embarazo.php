<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Embarazo
 *
 * @ORM\Table(name="embarazo")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks
 */
class Embarazo
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
     * @ORM\Column(name="numeroCiclo", type="integer", nullable=true)
     */
    private $numeroCiclo;


    /**
     * @ORM\Column(type="datetime")
     */
	private $fechaInicio;

  
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
   * @ORM\ManyToOne(targetEntity="Paciente", inversedBy="embarazos")
   * @ORM\JoinColumn(name="paciente_id", referencedColumnName="id")
   **/
  public $paciente;
  
  
   /**
   * @ORM\OneToMany(targetEntity="Ficha", mappedBy="embarazo")
   **/
  private $fichas;

	
	
	
	
	
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Embarazo
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }


    public function setPaciente($paciente)
    {
        $this->paciente = $paciente;

        return $this;
    }


    public function getPaciente()
    {
        return $this->paciente;
    }

    public function setNumeroCiclo($numeroCiclo)
    {
        $this->numeroCiclo = $numeroCiclo;

        return $this;
    }

    public function getNumeroCiclo()
    {
        return $this->numeroCiclo;
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
        return 'hola'; //$this->id; después se setea solo
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
