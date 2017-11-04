<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 13.10.2017
 * Time: 20:47
 */

namespace Blog\BlogBundle\Controller;

use Blog\BlogBundle\Entity\Task;
use Blog\BlogBundle\Entity\User;
use Blog\BlogBundle\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Blog\BlogBundle\Form\LoginType;

class RegisterController
{
//    public function registerAction(Request $request)
//    {
//
//        // create a task and give it some dummy data for this example
//        $task = new Task();
//        $user = new User();
//        $form = $this->createForm(RegisterType::class, $task);
//
//        $login = $this->createLogin();
//        $this->enterLogin($request, $login);
//
//        if ($request->isMethod($request::METHOD_POST)) {
//            $form->handleRequest($request);
//
//            if ($form->isValid()) {
//                $em1 = $this->getDoctrine()->getManager();
//                $user1=$em1->getRepository(User::class)->findOneBy(array('email'=>$task->getEmail()));
//                if ($user1==null){
//                $em = $this->getDoctrine()->getManager();
//
//                if ($task->getPassword() == $task->getPasswordConfirm()) {
//                    $user->setLogin($task->getName());
//                    $user->setPassword(hash("sha512",$task->getPassword(),false));
//                    $em->persist($user);
//                    $em->flush();
//                }
//                return $this->render('@Blog/Default/okregister.html.twig', array('name' => $task->getName(), 'surname' => $task->getEmail()));
//            }}
//        }
//            return $this->render('BlogBundle:Default:new.html.twig', array(
//                'form' => $form->createView(), 'form_login' => $login->createView(),
//            ));
//
//    }
}