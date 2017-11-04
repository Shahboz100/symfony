<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 04.11.2017
 * Time: 1:13
 */

namespace Blog\BlogBundle\Controller;

use Blog\BlogBundle\Entity\Content;
use Blog\BlogBundle\Entity\Login;
use Blog\BlogBundle\Form;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Route;
use Blog\BlogBundle\Form\LoginType;
class HomeController extends Controller
{
    public function homeAction(){
        $login = $this->createLoginForm();
        $content = $this->getDoctrine()
                        ->getManager()
                        ->getRepository(Content::class);

        return $this->render("@Blog/Default/index.html.twig",array(
            "form_login"=>$login->createView(),"content"=>$content->findAll(),
        ));
    }

    public function createLoginForm(){

        $form =$this->createForm(LoginType::class,new Login());

        return $form;
    }
}