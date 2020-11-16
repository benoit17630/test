<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * *@Route("/contact",name="page_contact")
     */
    public function contact(){
        var_dump("affichage du texte");
        die;
    }
    /**
     * *@Route("/blog",name="page_blog")
     */
    public function blog(){
      var_dump("au mon joli blog");
        die;
    }

    /**
     * @route("/age", name="age_page")
     * @param Request $request
     */
    public function age(Request $request){

       $age= $request->query->get('age');
       $nom = $request->query->get('name');// je creer la variable $nom et je recupere le name dans l url
        var_dump($nom);
        var_dump($age);
        die;
    }
}