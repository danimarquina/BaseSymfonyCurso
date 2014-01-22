<?php

namespace MisRecetas\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MisRecetasRecetasBundle:Default:index.html.twig', array('name' => $name));
    }
}
