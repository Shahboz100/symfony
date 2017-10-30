<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 28.10.2017
 * Time: 4:49
 */

namespace Blog\BlogBundle\Controller;


use Blog\BlogBundle\Entity\User;
use Blog\BlogBundle\Form\LoginType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $user = new User();
        $form=$this->createForm(LoginType::class,$user);

        if ($request->isMethod($request::METHOD_POST)){
            $form->handleRequest($request);

            if ($form->isValid()){

                return  $this->render('@Blog/Default/index.html.twig');
            }
        }
        return $this->render('BlogBundle:Default:index.html.twig',array(
            'form_login'=>$form->createView(),
        ));
    }
}