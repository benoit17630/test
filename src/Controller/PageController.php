<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
            die("tu na pas l age pour jouer");//si moins de 18ans se message
        }
    }

    /**
     * @Route ("/article/{id}" , name="page_article") je cree la page article
     * @param Request $request
     * @return Response
     */
    //je cree une metode article show pour afficher mon article avec un id
    public function Articles(Request $request){
      $articleId = $request->get("id");// je recupere l id dans l adresse url qui est entree
        $articles = [
            1 => 'Article 1',
            2 => "Article 2",
            3 => "Article 3",
            4 => 'Article 4',
            5 => "Article 5",
            6 => "Article 6",
        ];

        //j affiche mon article
        return new  Response('<h1>'.$articles[$articleId] .'</h1> ');
    }
}