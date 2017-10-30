<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 14.10.2017
 * Time: 1:41
 */

namespace Blog\BlogBundle\Entity;


class Task
{
    protected $surname;

    protected $name;

    protected $password;

    protected $password_confirm;

    /**
     * @return mixed
     */
    public function getPasswordConfirm()
    {
        return $this->password_confirm;
    }

    /**
     * @param mixed $password_confirm
     */
    public function setPasswordConfirm($password_confirm)
    {
        $this->password_confirm = $password_confirm;
    }

    protected $email;

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

}