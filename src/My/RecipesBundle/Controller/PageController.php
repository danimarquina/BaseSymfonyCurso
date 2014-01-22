<?php
 
namespace My\RecipesBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyRecipesBundle:Recipe:index.html.twig');
    }
}