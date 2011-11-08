<?php

namespace Gobernacion\RrhhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('GobernacionRrhhBundle:Default:index.html.twig', array('name' => $name));
    }
}
