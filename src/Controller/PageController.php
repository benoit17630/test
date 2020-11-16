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

       $age = $request->query->get('age');
       $nom = $request->query->get('name');// je creer la variable $nom et je recupere le name dans l url
       echo "bonjour : ".$nom ." et tu a ".$age."ans";

        die;
    }
    /**
     * @route("/poker", name="poker_page")
     * @param Request $request
     */
    public function poker(Request $request){
        //je cree une metode poker avec l url /poker
        $age = $request->get('age');
        if($age >=18){
            die( "tu peut aceder au jeu de poker");//si plus de 18 ans j afiche se message
        }else{
            die("tu na pas l age pour jouer");//si moin de 18ans se message
        }
    }
}