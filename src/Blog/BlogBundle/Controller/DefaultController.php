<?php

namespace Blog\BlogBundle\Controller;

use Blog\BlogBundle\Entity\Content;
use Blog\BlogBundle\Entity\User;
use Blog\BlogBundle\Form\LoginType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $content=$this->getDoctrine()->getManager()
                    ->getRepository(Content::class)
                    ->findAll();
        $login=$this->createLogin();
        return $this->render('BlogBundle:Default:index.html.twig',array(
            'form_login'=>$login->createView(),'content'=>$content,'img1'=>'img/shapka1.jpg',
            )
        );
    }
    public function createLogin(){
        $user = new User();
        $form=$this->createForm(LoginType::class,$user);
        return $form;
    }
    public function enterLogin(Request $request,$login){
        if ($request->isMethod($request::METHOD_POST)) {
            $login->handleRequest($request);

            if ($login->isValid()) {
                if ($login->isSubmitted()){

                }
            }
        }
    }
}
