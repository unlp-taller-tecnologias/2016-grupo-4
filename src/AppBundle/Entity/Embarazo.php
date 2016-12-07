<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="numeroCiclo", type="integer")
     */
    private $numeroCiclo;


    /**
     * @ORM\Column(type="datetime")
     */
	private $fechaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="medico", type="string", length=50)
     */
    private $medico;

    /**
     * @var bool
     *
     * @ORM\Column(name="cobertura_privado", type="boolean")
     */
    private $coberturaPrivado;

    /**
     * @var bool
     *
     * @ORM\Column(name="cobertura_obra_social", type="boolean")
     */
    private $coberturaObraSocial;

    /**
     * @var bool
     *
     * @ORM\Column(name="cobertura_no_posee", type="boolean")
     */
    private $coberturaNoPosee;

    /**
     * @var bool
     *
     * @ORM\Column(name="complicaciones_maternas_hie", type="boolean")
     */
    private $complicacionesMaternasHie;

    /**
     * @var bool
     *
     * @ORM\Column(name="complicaciones_maternas_preclampsia", type="boolean")
     */
    private $complicacionesMaternasPreclampsia;

    /**
     * @var bool
     *
     * @ORM\Column(name="complicaciones_maternas_otras", type="boolean")
     */
    private $complicacionesMaternasOtras;

    /**
     * @var string
     *
     * @ORM\Column(name="complicaciones_maternas_cuales", type="string", length=255)
     */
    private $complicacionesMaternasCuales;

    /**
     * @var bool
     *
     * @ORM\Column(name="terminacion_embarazo_normal", type="boolean")
     */
    private $terminacionEmbarazoNormal;

    /**
     * @var bool
     *
     * @ORM\Column(name="terminacion_embarazo_prematuro", type="boolean")
     */
    private $terminacionEmbarazoPrematuro;

    /**
     * @var bool
     *
     * @ORM\Column(name="terminacion_embarazo_cesarea", type="boolean")
     */
    private $terminacionEmbarazoCesarea;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_hijos", type="integer")
     */
    private $numeroHijos;

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

    /**
     * Set medico
     *
     * @param string $medico
     * @return Embarazo
     */
    public function setMedico($medico)
    {
        $this->medico = $medico;

        return $this;
    }

    /**
     * Get medico
     *
     * @return string 
     */
    public function getMedico()
    {
        return $this->medico;
    }

    /**
     * Set coberturaPrivado
     *
     * @param boolean $coberturaPrivado
     * @return Embarazo
     */
    public function setCoberturaPrivado($coberturaPrivado)
    {
        $this->coberturaPrivado = $coberturaPrivado;

        return $this;
    }

    /**
     * Get coberturaPrivado
     *
     * @return boolean 
     */
    public function getCoberturaPrivado()
    {
        return $this->coberturaPrivado;
    }

    /**
     * Set coberturaObraSocial
     *
     * @param boolean $coberturaObraSocial
     * @return Embarazo
     */
    public function setCoberturaObraSocial($coberturaObraSocial)
    {
        $this->coberturaObraSocial = $coberturaObraSocial;

        return $this;
    }

    /**
     * Get coberturaObraSocial
     *
     * @return boolean 
     */
    public function getCoberturaObraSocial()
    {
        return $this->coberturaObraSocial;
    }

    /**
     * Set coberturaNoPosee
     *
     * @param boolean $coberturaNoPosee
     * @return Embarazo
     */
    public function setCoberturaNoPosee($coberturaNoPosee)
    {
        $this->coberturaNoPosee = $coberturaNoPosee;

        return $this;
    }

    /**
     * Get coberturaNoPosee
     *
     * @return boolean 
     */
    public function getCoberturaNoPosee()
    {
        return $this->coberturaNoPosee;
    }

    /**
     * Set complicacionesMaternasHie
     *
     * @param boolean $complicacionesMaternasHie
     * @return Embarazo
     */
    public function setComplicacionesMaternasHie($complicacionesMaternasHie)
    {
        $this->complicacionesMaternasHie = $complicacionesMaternasHie;

        return $this;
    }

    /**
     * Get complicacionesMaternasHie
     *
     * @return boolean 
     */
    public function getComplicacionesMaternasHie()
    {
        return $this->complicacionesMaternasHie;
    }

    /**
     * Set complicacionesMaternasPreclampsia
     *
     * @param boolean $complicacionesMaternasPreclampsia
     * @return Embarazo
     */
    public function setComplicacionesMaternasPreclampsia($complicacionesMaternasPreclampsia)
    {
        $this->complicacionesMaternasPreclampsia = $complicacionesMaternasPreclampsia;

        return $this;
    }

    /**
     * Get complicacionesMaternasPreclampsia
     *
     * @return boolean 
     */
    public function getComplicacionesMaternasPreclampsia()
    {
        return $this->complicacionesMaternasPreclampsia;
    }

    /**
     * Set complicacionesMaternasOtras
     *
     * @param boolean $complicacionesMaternasOtras
     * @return Embarazo
     */
    public function setComplicacionesMaternasOtras($complicacionesMaternasOtras)
    {
        $this->complicacionesMaternasOtras = $complicacionesMaternasOtras;

        return $this;
    }

    /**
     * Get complicacionesMaternasOtras
     *
     * @return boolean 
     */
    public function getComplicacionesMaternasOtras()
    {
        return $this->complicacionesMaternasOtras;
    }

    /**
     * Set complicacionesMaternasCuales
     *
     * @param string $complicacionesMaternasCuales
     * @return Embarazo
     */
    public function setComplicacionesMaternasCuales($complicacionesMaternasCuales)
    {
        $this->complicacionesMaternasCuales = $complicacionesMaternasCuales;

        return $this;
    }

    /**
     * Get complicacionesMaternasCuales
     *
     * @return string 
     */
    public function getComplicacionesMaternasCuales()
    {
        return $this->complicacionesMaternasCuales;
    }

    /**
     * Set terminacionEmbarazoNormal
     *
     * @param boolean $terminacionEmbarazoNormal
     * @return Embarazo
     */
    public function setTerminacionEmbarazoNormal($terminacionEmbarazoNormal)
    {
        $this->terminacionEmbarazoNormal = $terminacionEmbarazoNormal;

        return $this;
    }

    /**
     * Get terminacionEmbarazoNormal
     *
     * @return boolean 
     */
    public function getTerminacionEmbarazoNormal()
    {
        return $this->terminacionEmbarazoNormal;
    }

    /**
     * Set terminacionEmbarazoPrematuro
     *
     * @param boolean $terminacionEmbarazoPrematuro
     * @return Embarazo
     */
    public function setTerminacionEmbarazoPrematuro($terminacionEmbarazoPrematuro)
    {
        $this->terminacionEmbarazoPrematuro = $terminacionEmbarazoPrematuro;

        return $this;
    }

    /**
     * Get terminacionEmbarazoPrematuro
     *
     * @return boolean 
     */
    public function getTerminacionEmbarazoPrematuro()
    {
        return $this->terminacionEmbarazoPrematuro;
    }

    /**
     * Set terminacionEmbarazoCesarea
     *
     * @param boolean $terminacionEmbarazoCesarea
     * @return Embarazo
     */
    public function setTerminacionEmbarazoCesarea($terminacionEmbarazoCesarea)
    {
        $this->terminacionEmbarazoCesarea = $terminacionEmbarazoCesarea;

        return $this;
    }

    /**
     * Get terminacionEmbarazoCesarea
     *
     * @return boolean 
     */
    public function getTerminacionEmbarazoCesarea()
    {
        return $this->terminacionEmbarazoCesarea;
    }

    /**
     * Set numeroHijos
     *
     * @param integer $numeroHijos
     * @return Embarazo
     */
    public function setNumeroHijos($numeroHijos)
    {
        $this->numeroHijos = $numeroHijos;

        return $this;
    }

    /**
     * Get numeroHijos
     *
     * @return integer 
     */
    public function getNumeroHijos()
    {
        return $this->numeroHijos;
    }
	
	
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
     * Set numeroCiclo
     *
     * @param integer $numeroCiclo
     * @return Embarazo
     */
    public function setNumeroCiclo($numeroCiclo)
    {
        $this->numeroCiclo = $numeroCiclo;

        return $this;
    }

    /**
     * Get numeroCiclo
     *
     * @return integer 
     */
    public function getNumeroCiclo()
    {
        return $this->numeroCiclo;
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
	
	
		
	
}
