<?php

namespace Gobernacion\RrhhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class RrhhController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('GobernacionRrhhBundle:Rrhh:index.html.twig');
    }
}
