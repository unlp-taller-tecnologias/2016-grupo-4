<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Embarazo
 *
 * @ORM\Table(name="embarazo")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\EmbarazoRepository")
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
     * @ORM\Column(name="nroCiclo", type="integer")
     */
    private $nroCiclo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="medico", type="string", length=50)
     */
    private $medico;

    /**
     * @var string
     *
     * @ORM\Column(name="cobertura", type="string", length=25)
     */
    private $cobertura;

    /**
     * @var string
     *
     * @ORM\Column(name="complicacionesMaternas", type="string", length=255)
     */
    private $complicacionesMaternas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="terminacionEmbarazo", type="datetime")
     */
    private $terminacionEmbarazo;

    /**
     * @var int
     *
     * @ORM\Column(name="nroHijos", type="integer")
     */
    private $nroHijos;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nroCiclo
     *
     * @param integer $nroCiclo
     *
     * @return Embarazo
     */
    public function setNroCiclo($nroCiclo)
    {
        $this->nroCiclo = $nroCiclo;

        return $this;
    }

    /**
     * Get nroCiclo
     *
     * @return int
     */
    public function getNroCiclo()
    {
        return $this->nroCiclo;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
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
     *
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
     * Set cobertura
     *
     * @param string $cobertura
     *
     * @return Embarazo
     */
    public function setCobertura($cobertura)
    {
        $this->cobertura = $cobertura;

        return $this;
    }

    /**
     * Get cobertura
     *
     * @return string
     */
    public function getCobertura()
    {
        return $this->cobertura;
    }

    /**
     * Set complicacionesMaternas
     *
     * @param string $complicacionesMaternas
     *
     * @return Embarazo
     */
    public function setComplicacionesMaternas($complicacionesMaternas)
    {
        $this->complicacionesMaternas = $complicacionesMaternas;

        return $this;
    }

    /**
     * Get complicacionesMaternas
     *
     * @return string
     */
    public function getComplicacionesMaternas()
    {
        return $this->complicacionesMaternas;
    }

    /**
     * Set terminacionEmbarazo
     *
     * @param \DateTime $terminacionEmbarazo
     *
     * @return Embarazo
     */
    public function setTerminacionEmbarazo($terminacionEmbarazo)
    {
        $this->terminacionEmbarazo = $terminacionEmbarazo;

        return $this;
    }

    /**
     * Get terminacionEmbarazo
     *
     * @return \DateTime
     */
    public function getTerminacionEmbarazo()
    {
        return $this->terminacionEmbarazo;
    }

    /**
     * Set nroHijos
     *
     * @param integer $nroHijos
     *
     * @return Embarazo
     */
    public function setNroHijos($nroHijos)
    {
        $this->nroHijos = $nroHijos;

        return $this;
    }

    /**
     * Get nroHijos
     *
     * @return int
     */
    public function getNroHijos()
    {
        return $this->nroHijos;
    }
}

