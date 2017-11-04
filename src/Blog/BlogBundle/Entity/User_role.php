<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 04.11.2017
 * Time: 2:54
 */

namespace Blog\BlogBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;
/**
 * Class User_role
 * @package Blog\BlogBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="user_role")
 */
class User_role
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Blog\BlogBundle\Entity\Roles", mappedBy="")
     */
    private $id_role;

    /**
     * @ORM\OneToMany(targetEntity="Blog\BlogBundle\Entity\Users",mappedBy="User_role")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id")
     */
    private $id_user;

    /**
     * @return mixed
     */
    public function getIdRole()
    {
        return $this->id_role;
    }

    /**
     * @param mixed $id_role
     */
    public function setIdRole($id_role)
    {
        $this->id_role = $id_role;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->id_role = new \Doctrine\Common\Collections\ArrayCollection();
        $this->id_user = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add idRole
     *
     * @param \Blog\BlogBundle\Entity\Roles $idRole
     *
     * @return User_role
     */
    public function addIdRole(\Blog\BlogBundle\Entity\Roles $idRole)
    {
        $this->id_role[] = $idRole;

        return $this;
    }

    /**
     * Remove idRole
     *
     * @param \Blog\BlogBundle\Entity\Roles $idRole
     */
    public function removeIdRole(\Blog\BlogBundle\Entity\Roles $idRole)
    {
        $this->id_role->removeElement($idRole);
    }

    /**
     * Add idUser
     *
     * @param \Blog\BlogBundle\Entity\Users $idUser
     *
     * @return User_role
     */
    public function addIdUser(\Blog\BlogBundle\Entity\Users $idUser)
    {
        $this->id_user[] = $idUser;

        return $this;
    }

    /**
     * Remove idUser
     *
     * @param \Blog\BlogBundle\Entity\Users $idUser
     */
    public function removeIdUser(\Blog\BlogBundle\Entity\Users $idUser)
    {
        $this->id_user->removeElement($idUser);
    }
}
