<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 05.10.2017
 * Time: 1:56
 */

namespace DoctBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Doctors
 * @package DoctBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="doctors")
 */
class Doctors
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;
}