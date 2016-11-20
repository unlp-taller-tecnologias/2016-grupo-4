<?php
// src/AppBundle/Entity/User.php
namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="user")
*/
class User extends BaseUser
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Por favor ingrese su nombre.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Su nombre es muy corto.",
     *     maxMessage="Su nombre es muy largo.",
     *     groups={"Registration", "Profile"}
     * )
     */
	protected $nombre;
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Por favor ingrese su apellido.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Su apellido es muy corto.",
     *     maxMessage="Su apellido es muy largo.",
     *     groups={"Registration", "Profile"}
     * )
     */
	protected $apellido;

	/**
     * @ORM\ManyToMany(targetEntity="UnidadCarga", mappedBy="users")
     **/
    protected $unidades;
 
	public function __construct(){
		parent::__construct();
		// your own logic
		$this->unidades = new ArrayCollection();
	}


    /**
     * @param UnidadCarga $unidad
     */
    public function addUnidad(UnidadCarga $unidad)
    {
        if (!$this->unidades->contains($unidad)) {
            $this->unidades->add($unidad);
            $unidad->addTag($this);
        }
    }
     
    /**
     * @return array
     */
    public function getUnidades()
    {
        return $this->unidades->toArray();
    }
     
    /**
     * @param UnidadCarga $unidad
     */
    public function removeUnidad(UnidadCarga $unidad)
    {
        if (!$this->unidades->contains($unidad)) {
            return;
        }
        $this->unidades->removeElement($unidad);
        $unidad->removeTag($this);
    }
     
    public function removeAllUnidades()
    {
        $this->unidades->clear();
    }

    public function getNombre() {
      return $this->nombre;
    }

    public function setNombre($nom) {
      return $this->nombre=$nom;
    }

    public function getApellido() {
      return $this->apellido;
    }

    public function setApellido($ape) {
      return $this->apellido=$ape;
    }
}