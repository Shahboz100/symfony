<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 04.11.2017
 * Time: 2:36
 */

namespace Blog\BlogBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * Class Roles
 * @package Blog\BlogBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="roles")
 */
class Roles
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=20)
     */
    private $nameOfRole;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNameOfRole()
    {
        return $this->nameOfRole;
    }

    /**
     * @param mixed $nameOfRole
     */
    public function setNameOfRole($nameOfRole)
    {
        $this->nameOfRole = $nameOfRole;
    }

}
