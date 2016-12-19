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
    * @ORM\ManyToMany(targetEntity="UnidadCarga", inversedBy="users")
    * @ORM\JoinTable(name="unidades_users")
    **/
   public $unidades;

	public function __construct(){
		parent::__construct();
		// your own logic
		
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

    public function setRol($rol) {
        $array[] = $rol;
        parent::setRoles($array);
    }

    public function addRol($rol) {
        parent::addRole($rol);
    }

    /**
     * Never use this to check if this user has access to anything!
     *
     * Use the SecurityContext, or an implementation of AccessDecisionManager
     * instead, e.g.
     *
     *         $securityContext->isGranted('ROLE_USER');
     *
     * @param string $role
     *
     * @return boolean
     */

    public function hasRole($rol) {
        return parent::hasRole($rol);
    }

    public function hasRol() {
		$rol = '';
		return parent::hasRole($rol);
    }
}