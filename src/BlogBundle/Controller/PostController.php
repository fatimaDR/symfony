<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * @Route("/post")
     */
    public function indexAction()
    {

          $data =  [
               [
              "id"   => 1,
              "titre" => "Page index",
              "poste"  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
               "datePublication" => date('y-m-d')
              ],

              [
              "id"   => 2,
              "titre" => "Page index",
              "poste"  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
               "datePublication" => date('y-m-d')
              ],

              [
              "id"   => 3,
              "titre" => "Page index",
              "poste"  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
               "datePublication" => date('y-m-d')
              ],

              [
              "id"   => 4,
              "titre" => "Page index",
              "poste"  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
               "datePublication" => date('y-m-d')
              ]   ];

    return $this->render('BlogBundle:Post:index.html.twig', ['articles' => $data]);

     return $this->Appel();
    }

    public function Appel()
    {
    	return new response("Je suis fonction appel");
    }

}
