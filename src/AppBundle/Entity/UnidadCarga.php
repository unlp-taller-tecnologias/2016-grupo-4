<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;
/**
 * UnidadCarga
 *
 * @ORM\Table(name="unidad_carga")
 * @ORM\Entity()
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
      * @Assert\NotBlank()
     */
    private $nombre;
    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=50)
     */
    private $localidad;   
    
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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", mappedBy="unidades")
     **/
    protected $users;
 
    /**
     * Tag constructor.
     */
    public function __construct() {
        $this->set = new ArrayCollection();
        $this->createdAt= new \DateTime();
        $this->updatedAt= new \DateTime();
        $this->users = new ArrayCollection();
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
     * @param User $user
     */
    public function addUser(User $user)
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addTag($this);
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
        $user->removeTag($this);
    }
     
    public function removeAllUsers()
    {
        $this->users->clear();
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
        $this->localidad = $localidad;
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
     * Get localidad
     *
     * @return string 
     */
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
}