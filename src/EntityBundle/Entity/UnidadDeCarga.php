<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * UnidadDeCarga
 *
 * @ORM\Table(name="unidad_de_carga")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\UnidadDeCargaRepository")
 */
class UnidadDeCarga
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
     * @ORM\Column(name="provincia", type="string", length=25)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=50)
     */
    private $ciudad;

   /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", inversedBy="unidades")
     * @ORM\JoinTable(name="articles_tags")
     **/
   private $users;
 
    /**
     * Tag constructor.
     */
    public function __construct() {
        $this->users = new ArrayCollection();
    }


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
     * Set provincia
     *
     * @param string $provincia
     *
     * @return UnidadDeCarga
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return UnidadDeCarga
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
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return UnidadDeCarga
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }


/**
 * @param User|null $user
 */
public function addUser(User $user = null)
{
    if (!$this->users->contains($user)) {
        $this->users->add($user);
        $user->addUnidad($this);
    }
}
 
/**
 * @return array
 */
public function getUsers()
{
    return $this->users->toArray();
}
 
/**
 * @param User $user
 */
public function removeUser(User $user)
{
    if (!$this->users->contains($user)) {
        return;
    }
    $this->users->removeElement($user);
    $user->removeUnidad($this);
}
 
/**
 * @desc Remove all users 
 */
public function removeAllUsers()
{
    $this->users->clear();
}
}

