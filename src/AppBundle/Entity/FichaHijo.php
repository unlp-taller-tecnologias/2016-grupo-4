<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichaHijo
 *
 * @ORM\Table(name="ficha_hijo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FichaHijoRepository")
 * @ORM\HasLifecycleCallbacks
 */
class FichaHijo
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
     * @var bool
     *
     * @ORM\Column(name="complicacionesRciu", type="boolean", nullable=true)
     */
    private $complicacionesRciu;

    /**
     * @var bool
     *
     * @ORM\Column(name="complicacionesMacrosomia", type="boolean", nullable=true)
     */
    private $complicacionesMacrosomia;

    /**
     * @var bool
     *
     * @ORM\Column(name="complicacionesSindDistressPrematuro", type="boolean", nullable=true)
     */
    private $complicacionesSindDistressPrematuro;

    /**
     * @var bool
     *
     * @ORM\Column(name="complicacionesHipoglucemia", type="boolean", nullable=true)
     */
    private $complicacionesHipoglucemia;

    /**
     * @var bool
     *
     * @ORM\Column(name="complicacionesMalformacionesFetales", type="boolean", nullable=true)
     */
    private $complicacionesMalformacionesFetales;

    /**
     * @var bool
     *
     * @ORM\Column(name="complicacionesMortalidadPrenatal", type="boolean", nullable=true)
     */
    private $complicacionesMortalidadPrenatal;

    /**
     * @var bool
     *
     * @ORM\Column(name="complicacionesOtras", type="boolean", nullable=true)
     */
    private $complicacionesOtras;

    /**
     * @var string
     *
     * @ORM\Column(name="complicacionesCuales", type="string", length=255, nullable=true)
     */
    private $complicacionesCuales;

    /**
     * @var int
     *
     * @ORM\Column(name="peso", type="bigint", nullable=true)
     */
    private $peso;

    /**
     * @var int
     *
     * @ORM\Column(name="capurro", type="integer", nullable=true)
     */
    private $capurro;


	/**
	* @ORM\ManyToOne(targetEntity="Ficha")
	*/
	protected $ficha;	
	
	/**
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;
		
	
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
     * Set complicacionesRciu
     *
     * @param boolean $complicacionesRciu
     * @return FichaHijo
     */
    public function setComplicacionesRciu($complicacionesRciu)
    {
        $this->complicacionesRciu = $complicacionesRciu;

        return $this;
    }

    /**
     * Get complicacionesRciu
     *
     * @return boolean 
     */
    public function getComplicacionesRciu()
    {
        return $this->complicacionesRciu;
    }

    /**
     * Set complicacionesMacrosomia
     *
     * @param boolean $complicacionesMacrosomia
     * @return FichaHijo
     */
    public function setComplicacionesMacrosomia($complicacionesMacrosomia)
    {
        $this->complicacionesMacrosomia = $complicacionesMacrosomia;

        return $this;
    }

    /**
     * Get complicacionesMacrosomia
     *
     * @return boolean 
     */
    public function getComplicacionesMacrosomia()
    {
        return $this->complicacionesMacrosomia;
    }

    /**
     * Set complicacionesSindDistressPrematuro
     *
     * @param boolean $complicacionesSindDistressPrematuro
     * @return FichaHijo
     */
    public function setComplicacionesSindDistressPrematuro($complicacionesSindDistressPrematuro)
    {
        $this->complicacionesSindDistressPrematuro = $complicacionesSindDistressPrematuro;

        return $this;
    }

    /**
     * Get complicacionesSindDistressPrematuro
     *
     * @return boolean 
     */
    public function getComplicacionesSindDistressPrematuro()
    {
        return $this->complicacionesSindDistressPrematuro;
    }

    /**
     * Set complicacionesHipoglucemia
     *
     * @param boolean $complicacionesHipoglucemia
     * @return FichaHijo
     */
    public function setComplicacionesHipoglucemia($complicacionesHipoglucemia)
    {
        $this->complicacionesHipoglucemia = $complicacionesHipoglucemia;

        return $this;
    }

    /**
     * Get complicacionesHipoglucemia
     *
     * @return boolean 
     */
    public function getComplicacionesHipoglucemia()
    {
        return $this->complicacionesHipoglucemia;
    }

    /**
     * Set complicacionesMalformacionesFetales
     *
     * @param boolean $complicacionesMalformacionesFetales
     * @return FichaHijo
     */
    public function setComplicacionesMalformacionesFetales($complicacionesMalformacionesFetales)
    {
        $this->complicacionesMalformacionesFetales = $complicacionesMalformacionesFetales;

        return $this;
    }

    /**
     * Get complicacionesMalformacionesFetales
     *
     * @return boolean 
     */
    public function getComplicacionesMalformacionesFetales()
    {
        return $this->complicacionesMalformacionesFetales;
    }

    /**
     * Set complicacionesMortalidadPrenatal
     *
     * @param boolean $complicacionesMortalidadPrenatal
     * @return FichaHijo
     */
    public function setComplicacionesMortalidadPrenatal($complicacionesMortalidadPrenatal)
    {
        $this->complicacionesMortalidadPrenatal = $complicacionesMortalidadPrenatal;

        return $this;
    }

    /**
     * Get complicacionesMortalidadPrenatal
     *
     * @return boolean 
     */
    public function getComplicacionesMortalidadPrenatal()
    {
        return $this->complicacionesMortalidadPrenatal;
    }

    /**
     * Set complicacionesOtras
     *
     * @param boolean $complicacionesOtras
     * @return FichaHijo
     */
    public function setComplicacionesOtras($complicacionesOtras)
    {
        $this->complicacionesOtras = $complicacionesOtras;

        return $this;
    }

    /**
     * Get complicacionesOtras
     *
     * @return boolean 
     */
    public function getComplicacionesOtras()
    {
        return $this->complicacionesOtras;
    }

    /**
     * Set complicacionesCuales
     *
     * @param string $complicacionesCuales
     * @return FichaHijo
     */
    public function setComplicacionesCuales($complicacionesCuales)
    {
        $this->complicacionesCuales = $complicacionesCuales;

        return $this;
    }

    /**
     * Get complicacionesCuales
     *
     * @return string 
     */
    public function getComplicacionesCuales()
    {
        return $this->complicacionesCuales;
    }

    /**
     * Set peso
     *
     * @param integer $peso
     * @return FichaHijo
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return integer 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set capurro
     *
     * @param integer $capurro
     * @return FichaHijo
     */
    public function setCapurro($capurro)
    {
        $this->capurro = $capurro;

        return $this;
    }

    /**
     * Get capurro
     *
     * @return integer 
     */
    public function getCapurro()
    {
        return $this->capurro;
    }
	
	
	 /**
     * Set ficha
     *
     * @param integer $ficha
     * @return ficha
     */
    public function setFicha($ficha)
    {
        $this->ficha = $ficha;
        return $this;
    }

    /**
     * Get ficha
     *
     * @return integer 
     */
    public function getFicha()
    {
        return $this->ficha;
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
	
}
