<?php

namespace My\RecipesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\RecipesBundle\Entity\Recipe;

class DefaultController extends Controller
{
    public function createAction(){
               
        $author = new Author('Karlos', 'Arguiñano');        
        $ingredient = new Ingredient('Pollo');        
        $recipe = new Recipe($author, 'Pollo al pil-pil', 'Deliciosa y económica receta','facil');        
        $recipe->add($ingredient);
        
        $this-> persistAndflush($recipe);
        
        return $this->redirect($this->generateUrl('my_recipes_show',array('id'=> $recipe->getId())));
        
    }
    private function persistAndflush(Recipe $recipe){
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($recipe);
        $em->flush();
    }
    public function showAction(){
        $repository = $this->getDoctrine()->getRepository('MyRecipesBundle:Recipe');
        $recipe = $repository->findAll();
    }
    public function indexAction($name)
    {
        return $this->render('MyRecipesBundle:Default:index.html.twig', array('name' => $name));
    }
}
