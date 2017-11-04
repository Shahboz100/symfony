<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 04.11.2017
 * Time: 1:24
 */

namespace Blog\BlogBundle\Entity;


class Login
{
   private $login;

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
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
   private $password;

}