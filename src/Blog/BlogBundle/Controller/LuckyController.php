<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 29.09.2017
 * Time: 17:50
 */

namespace Blog\BlogBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        return $this->render('BlogBundle:Default:quest.html.twig');
    }
}