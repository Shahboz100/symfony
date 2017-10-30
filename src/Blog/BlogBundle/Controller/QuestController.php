<?php

namespace Blog\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class QuestController extends Controller {
    /**
     * @Template("@BlogBundle/Resources/views/Default/quest.html.twig")
     */
    public function questAction(){
        $number = mt_rand(0, 100);
        return array('number'=>$number);
    }
}