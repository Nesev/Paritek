<?php

namespace testBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function domotiqueAction($name)
    {
        return $this->render('testBundle:Default:domotique.html.twig', array('name' => $name));
    }
	
	public function robotiqueAction($name)
    {
        return $this->render('testBundle:Default:robotique.html.twig', array('name' => $name));
    }
	
	public function informatiqueAction($name)
    {
        return $this->render('testBundle:Default:informatique.html.twig', array('name' => $name));
    }
	
}
