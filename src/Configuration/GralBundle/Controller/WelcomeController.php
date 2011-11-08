<?php

namespace Configuration\GralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class WelcomeController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ConfigurationGralBundle:Welcome:index.html.twig');
    }
}
