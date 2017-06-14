<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ficha
 *
 * @ORM\Table(name="ficha")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks
 */
class Ficha
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
     * @var date
     *
     * @ORM\Column(name="fechaRegistro", type="date", nullable=false)
     * @Assert\Date(message = "El valor ingresado no es una fecha")
     * @Assert\Range(max = "now",  maxMessage = "La fecha no debe ser posterior a la actual.")
     */

	private $fechaRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="tas", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(250)  
     */
    private $tas;

	/**
     * @var int
     *
     * @ORM\Column(name="tad", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(250) 
     */
    private $tad;

    /**
     * @var int
     *
     * @ORM\Column(name="talla", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(230) 
     */
    private $talla;

    /**
     * @var int
     *
     * @ORM\Column(name="peso", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(600) 
     */
    private $peso;

    /**
     * @var int
     *
     * @ORM\Column(name="glucemia", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(999) 
     */
    private $glucemia;

    /**
     * @var int
     *
     * @ORM\Column(name="fructosamina", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(999) 
     */
    private $fructosamina;

    /**
     * @var int
     *
     * @ORM\Column(name="hba1c", type="decimal", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(999) 
     */
    private $hba1c;

    /**
     * @var int
     *
     * @ORM\Column(name="colesterolTotal", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(999) 
     */
    private $colesterolTotal;

    /**
     * @var int
     *
     * @ORM\Column(name="colesterolHdl", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(999) 
     */
    private $colesterolHdl;

    /**
     * @var int
     *
     * @ORM\Column(name="colesterolLdl", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(999) 
     */
    private $colesterolLdl;

    /**
     * @var int
     *
     * @ORM\Column(name="trigliceridos", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(999)    
     */
    private $trigliceridos;

    /**
     * @var int
     *
     * @ORM\Column(name="creatinina", type="decimal", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(999) 
     */
    private $creatinina;

    /**
     * @var int
     *
     * @ORM\Column(name="proteinuria", type="decimal", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(999) 
     */
    private $proteinuria;

    /**
     * @var string
     *
     * @ORM\Column(name="urocultivo", type="boolean", nullable=true)
     */
    private $urocultivo=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="hipertensionCronica", type="boolean", nullable=true)
     */
    private $hipertensionCronica=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="obesidad", type="boolean", nullable=true)
     */
    private $obesidad=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="tabaquismo", type="boolean", nullable=true)
     */
    private $tabaquismo=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="realizaActividadFisica", type="boolean", nullable=true)
     */
    private $realizaActividadFisica=false;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroDeVecesPorSemana", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(7) 
     */
    private $numeroDeVecesPorSemana;

    /**
     * @var int
     *
     * @ORM\Column(name="minutos", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(300) 
     */
    private $minutos;

    /**
     * @var bool
     *
     * @ORM\Column(name="conoceMetasDeTratamiento", type="boolean", nullable=true)
     */
    private $conoceMetasDeTratamiento=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="cumplePlanDeAlimentacion", type="boolean", nullable=true)
     */
    private $cumplePlanDeAlimentacion=false;

    /**
     * @var int
     *
     * @ORM\Column(name="numerodePorcionesDeFrutaPorDia", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(99) 
     */
    private $numerodePorcionesDeFrutaPorDia;

    /**
     * @var bool
     *
     * @ORM\Column(name="sabeIdentificarOTratarHipoglucemias", type="boolean", nullable=true)
     */
    private $sabeIdentificarOTratarHipoglucemias=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="automonitoreoGlucemico", type="boolean", nullable=true)
     */
    private $automonitoreoGlucemico=false;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroDeVecesPorDia", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(99) 
     */
    private $numeroDeVecesPorDia;

    /**
     * @var bool
     *
     * @ORM\Column(name="fumaActualmente", type="boolean", nullable=true)
     */
    private $fumaActualmente=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="fumoAnteriorMente", type="boolean", nullable=true)
     */
    private $fumoAnteriorMente=false;

    /**
     * @var int
     *
     * @ORM\Column(name="cigarrillosAlDia", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(99) 
     */
    private $cigarrillosAlDia;

    /**
     * @var string
     *
     * @ORM\Column(name="causaHospitalizacion1", type="string", length=255, nullable=true)
     */
    private $causaHospitalizacion1;

    /**
     * @var string
     *
     * @ORM\Column(name="causaHospitalizacion2", type="string", length=255, nullable=true)
     */
    private $causaHospitalizacion2;

    /**
     * @var string
     *
     * @ORM\Column(name="causaHospitalizacion3", type="string", length=255, nullable=true)
     */
    private $causaHospitalizacion3;

    /**
     * @var int
     *
     * @ORM\Column(name="diasHospitalizacion1", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(180) 
     */
    private $diasHospitalizacion1;

    /**
     * @var int
     *
     * @ORM\Column(name="diasHospitalizacion2", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(180)
     */
    private $diasHospitalizacion2;

    /**
     * @var int
     *
     * @ORM\Column(name="diasHospitalizacion3", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(180)
     */
    private $diasHospitalizacion3;

    /**
     * @var int
     *
     * @ORM\Column(name="hipertensionAtenolol", type="decimal", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(9999)
     */
    private $hipertensionAtenolol;

    /**
     * @var int
     *
     * @ORM\Column(name="hipertensionBloqueantesCalcicos", type="decimal", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(9999)
     */
    private $hipertensionBloqueantesCalcicos;

    /**
     * @var int
     *
     * @ORM\Column(name="hipertensionFurosemida", type="decimal", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(9999)
     */
    private $hipertensionFurosemida;

    /**
     * @var int
     *
     * @ORM\Column(name="hipertensionOtro", type="decimal", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(9999)
     */
    private $hipertensionOtro;

    /**
     * @var string
     *
     * @ORM\Column(name="hipertensionCual", type="string", length=50, nullable=true)
     */
    private $hipertensionCual;

    /**
     * @var int
     *
     * @ORM\Column(name="aas", type="decimal", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(9999)
     */
    private $aas;

    /**
     * @var int
     *
     * @ORM\Column(name="insulinaNph", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(9999)
     */
    private $insulinaNph;

    /**
     * @var int
     *
     * @ORM\Column(name="insulinaDetemir", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(9999)
     */
    private $insulinaDetemir;

    /**
     * @var int
     *
     * @ORM\Column(name="insulinaCorriente", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(9999)
     */
    private $insulinaCorriente;

    /**
     * @var int
     *
     * @ORM\Column(name="insulinaAspartica", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(9999)
     */
    private $insulinaAspartica;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroInyeccionesDia", type="integer", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThan(99)
     */
    private $numeroInyeccionesDia;

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
     * @ORM\OneToMany(targetEntity="FichaHijo", mappedBy="ficha", cascade={"persist"})
     * @ORM\JoinColumn(name="ficha_id", referencedColumnName="id")
     */

	protected $fichasHijos;

	/**
     * @ORM\ManyToOne(targetEntity="Paciente", inversedBy="fichas", cascade={"persist"})
     * @ORM\JoinColumn(name="paciente_id", referencedColumnName="id")
     */
	protected $paciente;

	/**
     * @ORM\ManyToOne(targetEntity="Embarazo", inversedBy="fichas", cascade={"persist"})
     * @ORM\JoinColumn(name="embarazo_id", referencedColumnName="id")
     */

	protected $embarazo;	
	
	/**
     *
     * @ORM\Column(name="coberturaPrivado", type="boolean", nullable=true)
     */
	protected $coberturaPrivado=false;
	/**
     *
     * @ORM\Column(name="coberturaObraSocial", type="boolean", nullable=true)
     */
	protected $coberturaObraSocial=false;
	/**
     *
     * @ORM\Column(name="coberturaNinguna", type="boolean", nullable=true)
     */
	protected $coberturaNinguna=false;
	/**
     *
     * @ORM\Column(name="medico", type="string", nullable=true)
     */
	protected $medico;
	/**
     * @var int
     *
     * @ORM\Column(name="numeroHijos", type="integer", nullable=true)
     */
	protected $numeroHijos;
	/**
     * @var int
     *
     * @ORM\Column(name="partoNormal", type="boolean", nullable=true)
     */
	protected $partoNormal=false;
	/**
     *
     * @ORM\Column(name="partoPrematuro", type="boolean", nullable=true)
     */
	protected $partoPrematuro=false;
	/**
     * @var int
     *
     * @ORM\Column(name="partoCesarea", type="boolean", nullable=true)
     */
	protected $partoCesarea=false;
	/**
     *
     * @ORM\Column(name="cmHie", type="boolean", nullable=true)
     */
	protected $cmHie=false;
	/**
     *
     * @ORM\Column(name="cmPreclampsia", type="boolean", nullable=true)
     */
	protected $cmPreclampsia=false;
	/**
     *
     * @ORM\Column(name="cmOtras", type="boolean", nullable=true)
     */
	protected $cmOtras=false;
	/**
     *
     * @ORM\Column(name="cmCuales", type="string", length=255, nullable=true)
     */
	protected $cmCuales;
		
	

	
	
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
     * Set fechaRegistro
     *
     * @param date $fechaRegistro
     * @return Ficha
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return date 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }
    /**
     * Set tas
     *
     * @param string $tas
     * @return Ficha
     */
    public function setTas($tas)
    {
        $this->tas = $tas;

        return $this;
    }

    /**
     * Get tas
     *
     * @return string 
     */
    public function getTas()
    {
        return $this->tas;
    }

    /**
     * Set tad
     *
     * @param string $tad
     * @return Ficha
     */
    public function setTad($tad)
    {
        $this->tad = $tad;

        return $this;
    }

    /**
     * Get tad
     *
     * @return string 
     */
    public function getTad()
    {
        return $this->tad;
    }

    /**
     * Set talla
     *
     * @param string $talla
     * @return Ficha
     */
    public function setTalla($talla)
    {
        $this->talla = $talla;

        return $this;
    }

    /**
     * Get talla
     *
     * @return string 
     */
    public function getTalla()
    {
        return $this->talla;
    }

    /**
     * Set peso
     *
     * @param string $peso
     * @return Ficha
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return string 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set glucemia
     *
     * @param string $glucemia
     * @return Ficha
     */
    public function setGlucemia($glucemia)
    {
        $this->glucemia = $glucemia;

        return $this;
    }

    /**
     * Get glucemia
     *
     * @return string 
     */
    public function getGlucemia()
    {
        return $this->glucemia;
    }

    /**
     * Set fructosamina
     *
     * @param string $fructosamina
     * @return Ficha
     */
    public function setFructosamina($fructosamina)
    {
        $this->fructosamina = $fructosamina;

        return $this;
    }

    /**
     * Get fructosamina
     *
     * @return string 
     */
    public function getFructosamina()
    {
        return $this->fructosamina;
    }

    /**
     * Set hba1c
     *
     * @param string $hba1c
     * @return Ficha
     */
    public function setHba1c($hba1c)
    {
        $this->hba1c = $hba1c;

        return $this;
    }

    /**
     * Get hba1c
     *
     * @return string 
     */
    public function getHba1c()
    {
        return $this->hba1c;
    }

    /**
     * Set colesterolTotal
     *
     * @param string $colesterolTotal
     * @return Ficha
     */
    public function setColesterolTotal($colesterolTotal)
    {
        $this->colesterolTotal = $colesterolTotal;

        return $this;
    }

    /**
     * Get colesterolTotal
     *
     * @return string 
     */
    public function getColesterolTotal()
    {
        return $this->colesterolTotal;
    }

    /**
     * Set colesterolHdl
     *
     * @param string $colesterolHdl
     * @return Ficha
     */
    public function setColesterolHdl($colesterolHdl)
    {
        $this->colesterolHdl = $colesterolHdl;

        return $this;
    }

    /**
     * Get colesterolHdl
     *
     * @return string 
     */
    public function getColesterolHdl()
    {
        return $this->colesterolHdl;
    }

    /**
     * Set colesterolLdl
     *
     * @param string $colesterolLdl
     * @return Ficha
     */
    public function setColesterolLdl($colesterolLdl)
    {
        $this->colesterolLdl = $colesterolLdl;

        return $this;
    }

    /**
     * Get colesterolLdl
     *
     * @return string 
     */
    public function getColesterolLdl()
    {
        return $this->colesterolLdl;
    }

    /**
     * Set trigliceridos
     *
     * @param string $trigliceridos
     * @return Ficha
     */
    public function setTrigliceridos($trigliceridos)
    {
        $this->trigliceridos = $trigliceridos;

        return $this;
    }

    /**
     * Get trigliceridos
     *
     * @return string 
     */
    public function getTrigliceridos()
    {
        return $this->trigliceridos;
    }

    /**
     * Set creatinina
     *
     * @param string $creatinina
     * @return Ficha
     */
    public function setCreatinina($creatinina)
    {
        $this->creatinina = $creatinina;

        return $this;
    }

    /**
     * Get creatinina
     *
     * @return string 
     */
    public function getCreatinina()
    {
        return $this->creatinina;
    }

    /**
     * Set proteinuria
     *
     * @param string $proteinuria
     * @return Ficha
     */
    public function setProteinuria($proteinuria)
    {
        $this->proteinuria = $proteinuria;

        return $this;
    }

    /**
     * Get proteinuria
     *
     * @return string 
     */
    public function getProteinuria()
    {
        return $this->proteinuria;
    }

    /**
     * Set urocultivo
     *
     * @param string $urocultivo
     * @return Ficha
     */
    public function setUrocultivo($urocultivo)
    {
        $this->urocultivo = $urocultivo;

        return $this;
    }

    /**
     * Get urocultivo
     *
     * @return string 
     */
    public function getUrocultivo()
    {
        return $this->urocultivo;
    }

    /**
     * Set hipertensionCronica
     *
     * @param boolean $hipertensionCronica
     * @return Ficha
     */
    public function setHipertensionCronica($hipertensionCronica)
    {
        $this->hipertensionCronica = $hipertensionCronica;

        return $this;
    }

    /**
     * Get hipertensionCronica
     *
     * @return boolean 
     */
    public function getHipertensionCronica()
    {
        return $this->hipertensionCronica;
    }

    /**
     * Set obesidad
     *
     * @param boolean $obesidad
     * @return Ficha
     */
    public function setObesidad($obesidad)
    {
        $this->obesidad = $obesidad;

        return $this;
    }

    /**
     * Get obesidad
     *
     * @return boolean 
     */
    public function getObesidad()
    {
        return $this->obesidad;
    }

    /**
     * Set tabaquismo
     *
     * @param boolean $tabaquismo
     * @return Ficha
     */
    public function setTabaquismo($tabaquismo)
    {
        $this->tabaquismo = $tabaquismo;

        return $this;
    }

    /**
     * Get tabaquismo
     *
     * @return boolean 
     */
    public function getTabaquismo()
    {
        return $this->tabaquismo;
    }

    /**
     * Set realizaActividadFisica
     *
     * @param boolean $realizaActividadFisica
     * @return Ficha
     */
    public function setRealizaActividadFisica($realizaActividadFisica)
    {
        $this->realizaActividadFisica = $realizaActividadFisica;

        return $this;
    }

    /**
     * Get realizaActividadFisica
     *
     * @return boolean 
     */
    public function getRealizaActividadFisica()
    {
        return $this->realizaActividadFisica;
    }

    /**
     * Set numeroDeVecesPorSemana
     *
     * @param integer $numeroDeVecesPorSemana
     * @return Ficha
     */
    public function setNumeroDeVecesPorSemana($numeroDeVecesPorSemana)
    {
        $this->numeroDeVecesPorSemana = $numeroDeVecesPorSemana;

        return $this;
    }

    /**
     * Get numeroDeVecesPorSemana
     *
     * @return integer 
     */
    public function getNumeroDeVecesPorSemana()
    {
        return $this->numeroDeVecesPorSemana;
    }

    /**
     * Set minutos
     *
     * @param integer $minutos
     * @return Ficha
     */
    public function setMinutos($minutos)
    {
        $this->minutos = $minutos;

        return $this;
    }

    /**
     * Get minutos
     *
     * @return integer 
     */
    public function getMinutos()
    {
        return $this->minutos;
    }

    /**
     * Set conoceMetasDeTratamiento
     *
     * @param boolean $conoceMetasDeTratamiento
     * @return Ficha
     */
    public function setConoceMetasDeTratamiento($conoceMetasDeTratamiento)
    {
        $this->conoceMetasDeTratamiento = $conoceMetasDeTratamiento;

        return $this;
    }

    /**
     * Get conoceMetasDeTratamiento
     *
     * @return boolean 
     */
    public function getConoceMetasDeTratamiento()
    {
        return $this->conoceMetasDeTratamiento;
    }

    /**
     * Set cumplePlanDeAlimentacion
     *
     * @param boolean $cumplePlanDeAlimentacion
     * @return Ficha
     */
    public function setCumplePlanDeAlimentacion($cumplePlanDeAlimentacion)
    {
        $this->cumplePlanDeAlimentacion = $cumplePlanDeAlimentacion;

        return $this;
    }

    /**
     * Get cumplePlanDeAlimentacion
     *
     * @return boolean 
     */
    public function getCumplePlanDeAlimentacion()
    {
        return $this->cumplePlanDeAlimentacion;
    }

    /**
     * Set numerodePorcionesDeFrutaPorDia
     *
     * @param integer $numerodePorcionesDeFrutaPorDia
     * @return Ficha
     */
    public function setNumerodePorcionesDeFrutaPorDia($numerodePorcionesDeFrutaPorDia)
    {
        $this->numerodePorcionesDeFrutaPorDia = $numerodePorcionesDeFrutaPorDia;

        return $this;
    }

    /**
     * Get numerodePorcionesDeFrutaPorDia
     *
     * @return integer 
     */
    public function getNumerodePorcionesDeFrutaPorDia()
    {
        return $this->numerodePorcionesDeFrutaPorDia;
    }

    /**
     * Set sabeIdentificarOTratarHipoglucemias
     *
     * @param boolean $sabeIdentificarOTratarHipoglucemias
     * @return Ficha
     */
    public function setSabeIdentificarOTratarHipoglucemias($sabeIdentificarOTratarHipoglucemias)
    {
        $this->sabeIdentificarOTratarHipoglucemias = $sabeIdentificarOTratarHipoglucemias;

        return $this;
    }

    /**
     * Get sabeIdentificarOTratarHipoglucemias
     *
     * @return boolean 
     */
    public function getSabeIdentificarOTratarHipoglucemias()
    {
        return $this->sabeIdentificarOTratarHipoglucemias;
    }

    /**
     * Set automonitoreoGlucemico
     *
     * @param boolean $automonitoreoGlucemico
     * @return Ficha
     */
    public function setAutomonitoreoGlucemico($automonitoreoGlucemico)
    {
        $this->automonitoreoGlucemico = $automonitoreoGlucemico;

        return $this;
    }

    /**
     * Get automonitoreoGlucemico
     *
     * @return boolean 
     */
    public function getAutomonitoreoGlucemico()
    {
        return $this->automonitoreoGlucemico;
    }

    /**
     * Set numeroDeVecesPorDia
     *
     * @param integer $numeroDeVecesPorDia
     * @return Ficha
     */
    public function setNumeroDeVecesPorDia($numeroDeVecesPorDia)
    {
        $this->numeroDeVecesPorDia = $numeroDeVecesPorDia;

        return $this;
    }

    /**
     * Get numeroDeVecesPorDia
     *
     * @return integer 
     */
    public function getNumeroDeVecesPorDia()
    {
        return $this->numeroDeVecesPorDia;
    }

    /**
     * Set fumaActualmente
     *
     * @param boolean $fumaActualmente
     * @return Ficha
     */
    public function setFumaActualmente($fumaActualmente)
    {
        $this->fumaActualmente = $fumaActualmente;

        return $this;
    }

    /**
     * Get fumaActualmente
     *
     * @return boolean 
     */
    public function getFumaActualmente()
    {
        return $this->fumaActualmente;
    }

    /**
     * Set fumoAnteriorMente
     *
     * @param boolean $fumoAnteriorMente
     * @return Ficha
     */
    public function setFumoAnteriorMente($fumoAnteriorMente)
    {
        $this->fumoAnteriorMente = $fumoAnteriorMente;

        return $this;
    }

    /**
     * Get fumoAnteriorMente
     *
     * @return boolean 
     */
    public function getFumoAnteriorMente()
    {
        return $this->fumoAnteriorMente;
    }

    /**
     * Set cigarrillosAlDia
     *
     * @param integer $cigarrillosAlDia
     * @return Ficha
     */
    public function setCigarrillosAlDia($cigarrillosAlDia)
    {
        $this->cigarrillosAlDia = $cigarrillosAlDia;

        return $this;
    }

    /**
     * Get cigarrillosAlDia
     *
     * @return integer 
     */
    public function getCigarrillosAlDia()
    {
        return $this->cigarrillosAlDia;
    }

    /**
     * Set causaHospitalizacion1
     *
     * @param string $causaHospitalizacion1
     * @return Ficha
     */
    public function setCausaHospitalizacion1($causaHospitalizacion1)
    {
        $this->causaHospitalizacion1 = $causaHospitalizacion1;

        return $this;
    }

    /**
     * Get causaHospitalizacion1
     *
     * @return string 
     */
    public function getCausaHospitalizacion1()
    {
        return $this->causaHospitalizacion1;
    }

    /**
     * Set causaHospitalizacion2
     *
     * @param string $causaHospitalizacion2
     * @return Ficha
     */
    public function setCausaHospitalizacion2($causaHospitalizacion2)
    {
        $this->causaHospitalizacion2 = $causaHospitalizacion2;

        return $this;
    }

    /**
     * Get causaHospitalizacion2
     *
     * @return string 
     */
    public function getCausaHospitalizacion2()
    {
        return $this->causaHospitalizacion2;
    }

    /**
     * Set causaHospitalizacion3
     *
     * @param string $causaHospitalizacion3
     * @return Ficha
     */
    public function setCausaHospitalizacion3($causaHospitalizacion3)
    {
        $this->causaHospitalizacion3 = $causaHospitalizacion3;

        return $this;
    }

    /**
     * Get causaHospitalizacion3
     *
     * @return string 
     */
    public function getCausaHospitalizacion3()
    {
        return $this->causaHospitalizacion3;
    }

    /**
     * Set diasHospitalizacion1
     *
     * @param integer $diasHospitalizacion1
     * @return Ficha
     */
    public function setDiasHospitalizacion1($diasHospitalizacion1)
    {
        $this->diasHospitalizacion1 = $diasHospitalizacion1;

        return $this;
    }

    /**
     * Get diasHospitalizacion1
     *
     * @return integer 
     */
    public function getDiasHospitalizacion1()
    {
        return $this->diasHospitalizacion1;
    }

    /**
     * Set diasHospitalizacion2
     *
     * @param integer $diasHospitalizacion2
     * @return Ficha
     */
    public function setDiasHospitalizacion2($diasHospitalizacion2)
    {
        $this->diasHospitalizacion2 = $diasHospitalizacion2;

        return $this;
    }

    /**
     * Get diasHospitalizacion2
     *
     * @return integer 
     */
    public function getDiasHospitalizacion2()
    {
        return $this->diasHospitalizacion2;
    }

    /**
     * Set diasHospitalizacion3
     *
     * @param integer $diasHospitalizacion3
     * @return Ficha
     */
    public function setDiasHospitalizacion3($diasHospitalizacion3)
    {
        $this->diasHospitalizacion3 = $diasHospitalizacion3;

        return $this;
    }

    /**
     * Get diasHospitalizacion3
     *
     * @return integer 
     */
    public function getDiasHospitalizacion3()
    {
        return $this->diasHospitalizacion3;
    }

    /**
     * Set hipertensionAtenolol
     *
     * @param string $hipertensionAtenolol
     * @return Ficha
     */
    public function setHipertensionAtenolol($hipertensionAtenolol)
    {
        $this->hipertensionAtenolol = $hipertensionAtenolol;

        return $this;
    }

    /**
     * Get hipertensionAtenolol
     *
     * @return string 
     */
    public function getHipertensionAtenolol()
    {
        return $this->hipertensionAtenolol;
    }

    /**
     * Set hipertensionBloqueantesCalcicos
     *
     * @param string $hipertensionBloqueantesCalcicos
     * @return Ficha
     */
    public function setHipertensionBloqueantesCalcicos($hipertensionBloqueantesCalcicos)
    {
        $this->hipertensionBloqueantesCalcicos = $hipertensionBloqueantesCalcicos;

        return $this;
    }

    /**
     * Get hipertensionBloqueantesCalcicos
     *
     * @return string 
     */
    public function getHipertensionBloqueantesCalcicos()
    {
        return $this->hipertensionBloqueantesCalcicos;
    }

    /**
     * Set hipertensionFurosemida
     *
     * @param string $hipertensionFurosemida
     * @return Ficha
     */
    public function setHipertensionFurosemida($hipertensionFurosemida)
    {
        $this->hipertensionFurosemida = $hipertensionFurosemida;

        return $this;
    }

    /**
     * Get hipertensionFurosemida
     *
     * @return string 
     */
    public function getHipertensionFurosemida()
    {
        return $this->hipertensionFurosemida;
    }

    /**
     * Set hipertensionOtro
     *
     * @param string $hipertensionOtro
     * @return Ficha
     */
    public function setHipertensionOtro($hipertensionOtro)
    {
        $this->hipertensionOtro = $hipertensionOtro;

        return $this;
    }

    /**
     * Get hipertensionOtro
     *
     * @return string 
     */
    public function getHipertensionOtro()
    {
        return $this->hipertensionOtro;
    }

    /**
     * Set hipertensionCual
     *
     * @param string $hipertensionCual
     * @return Ficha
     */
    public function setHipertensionCual($hipertensionCual)
    {
        $this->hipertensionCual = $hipertensionCual;

        return $this;
    }

    /**
     * Get hipertensionCual
     *
     * @return string 
     */
    public function getHipertensionCual()
    {
        return $this->hipertensionCual;
    }

    /**
     * Set aas
     *
     * @param string $aas
     * @return Ficha
     */
    public function setAas($aas)
    {
        $this->aas = $aas;

        return $this;
    }

    /**
     * Get aas
     *
     * @return string 
     */
    public function getAas()
    {
        return $this->aas;
    }

    /**
     * Set insulinaNph
     *
     * @param string $insulinaNph
     * @return Ficha
     */
    public function setInsulinaNph($insulinaNph)
    {
        $this->insulinaNph = $insulinaNph;

        return $this;
    }

    /**
     * Get insulinaNph
     *
     * @return string 
     */
    public function getInsulinaNph()
    {
        return $this->insulinaNph;
    }

    /**
     * Set insulinaDetemir
     *
     * @param string $insulinaDetemir
     * @return Ficha
     */
    public function setInsulinaDetemir($insulinaDetemir)
    {
        $this->insulinaDetemir = $insulinaDetemir;

        return $this;
    }

    /**
     * Get insulinaDetemir
     *
     * @return string 
     */
    public function getInsulinaDetemir()
    {
        return $this->insulinaDetemir;
    }

    /**
     * Set insulinaCorriente
     *
     * @param string $insulinaCorriente
     * @return Ficha
     */
    public function setInsulinaCorriente($insulinaCorriente)
    {
        $this->insulinaCorriente = $insulinaCorriente;

        return $this;
    }

    /**
     * Get insulinaCorriente
     *
     * @return string 
     */
    public function getInsulinaCorriente()
    {
        return $this->insulinaCorriente;
    }

    /**
     * Set insulinaAspartica
     *
     * @param string $insulinaAspartica
     * @return Ficha
     */
    public function setInsulinaAspartica($insulinaAspartica)
    {
        $this->insulinaAspartica = $insulinaAspartica;

        return $this;
    }

    /**
     * Get insulinaAspartica
     *
     * @return string 
     */
    public function getInsulinaAspartica()
    {
        return $this->insulinaAspartica;
    }

    /**
     * Set numeroInyeccionesDia
     *
     * @param integer $numeroInyeccionesDia
     * @return Ficha
     */
    public function setNumeroInyeccionesDia($numeroInyeccionesDia)
    {
        $this->numeroInyeccionesDia = $numeroInyeccionesDia;

        return $this;
    }

    /**
     * Get numeroInyeccionesDia
     *
     * @return integer 
     */
    public function getNumeroInyeccionesDia()
    {
        return $this->numeroInyeccionesDia;
    }
	
	/**
     * Get fichasHijos
     */
    public function getFichasHijos()
    {
        return $this->fichasHijos;
    }

    public function setFichasHijos($fh)
    {
        $this->fichasHijos->add($fh);
		return $this;
    }	
	
	
    /**
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        $this->updatedAt= new \DateTime();
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
	
	public function getPaciente()
    {
        return $this->paciente;
    }
	
	public function setPaciente($paciente)
    {
        $this->paciente = $paciente;
		return $this;
    }
		

	public function getCoberturaPrivado()
	{
		return $this->coberturaPrivado;
	}
		
	public function setCoberturaPrivado($coberturaPrivado)
	{
		$this->coberturaPrivado = $coberturaPrivado;
		return $this;		
	}

	public function getCoberturaObraSocial()
	{
		return $this->coberturaObraSocial;
	}
		
	public function setCoberturaObraSocial($coberturaObraSocial)
	{
		$this->coberturaObraSocial = $coberturaObraSocial;
		return $this;		
	}


	public function getCoberturaNinguna()
	{
		return $this->coberturaNinguna;
	}
		
	public function setCoberturaNinguna($coberturaNinguna)
	{
		$this->coberturaNinguna = $coberturaNinguna;
		return $this;		
	}


	public function getMedico()
	{
		return $this->medico;
	}
		
	public function setMedico($medico)
	{
		$this->medico = $medico;
		return $this;		
	}

	public function getNumeroHijos()
	{
		return $this->numeroHijos;
	}
		
	public function setNumeroHijos($numeroHijos)
	{
		$this->numeroHijos = $numeroHijos;
		return $this;		
	}

	public function getPartoNormal()
	{
		return $this->partoNormal;
	}
		
	public function setPartoNormal($partoNormal)
	{
		$this->partoNormal = $partoNormal;
		return $this;		
	}


	public function getPartoPrematuro()
	{
		return $this->partoPrematuro;
	}
		
	public function setPartoPrematuro($partoPrematuro)
	{
		$this->partoPrematuro = $partoPrematuro;
		return $this;		
	}

	public function getPartoCesarea()
	{
		return $this->partoCesarea;
	}
		
	public function setPartoCesarea($partoCesarea)
	{
		$this->partoCesarea = $partoCesarea;
		return $this;		
	}


	public function getCmHie()
	{
		return $this->cmHie;
	}
		
	public function setCmHie($cmHie)
	{
		$this->cmHie = $cmHie;
		return $this;		
	}


	public function getCmPreclampsia()
	{
		return $this->cmPreclampsia;
	}
		
	public function setCmPreclampsia($cmPreclampsia)
	{
		$this->cmPreclampsia = $cmPreclampsia;
		return $this;		
	}
	

	public function getCmOtras()
	{
		return $this->cmOtras;
	}
		
	public function setCmOtras($cmOtras)
	{
		$this->cmOtras = $cmOtras;
		return $this;		
	}
	

	public function getCmCuales()
	{
		return $this->cmCuales;
	}
		
	public function setCmCuales($cmCuales)
	{
		$this->cmCuales = $cmCuales;
		return $this;		
	}
	
	
	public function getEmbarazo()
    {
        return $this->embarazo;
    }
	
	public function setEmbarazo($embarazo)
    {
        $this->embarazo = $embarazo;
		return $this;
    }

	public function tieneHijo1()
	{
		$hijos = $this->getFichasHijos();
		return count($hijos) > 0 ;
		
	}
	
	public function tieneHijo2()
	{
		$hijos = $this->getFichasHijos();
		return count($hijos) > 1 ;
		
	}
	
	public function getHijo1()
	{
		return $this->getFichasHijos()->first();
		
	}

	public function getHijo2()
	{
		return $this->getFichasHijos()->last();
	}	
	
	public function __construct()
    {
        $this->createdAt= new \DateTime();
        $this->updatedAt= new \DateTime();
        $this->fichasHijos= new ArrayCollection();
    }
	
}