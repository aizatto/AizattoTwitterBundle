<?php

namespace Aizatto\Bundle\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('AizattoTwitterBundle:Default:index.html.twig', array('name' => $name));
    }
}
