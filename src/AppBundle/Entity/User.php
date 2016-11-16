<?php
// src/AppBundle/Entity/User.php
namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
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
    * @ORM\Column(type="string", nullable=true)
    */
	protected $nombre;
	/**
    * @ORM\Column(type="string", nullable=true)
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
 
/**
 * @desc Remove all unidades
 */
public function removeAllUnidades()
{
    $this->unidades->clear();
}
}