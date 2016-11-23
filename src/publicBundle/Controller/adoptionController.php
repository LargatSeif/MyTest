<?php

namespace publicBundle\Controller;

use dataBundle\Entity\etat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class adoptionController extends Controller
{
    public function indexAction(){
        
        $Etats = $this->getDoctrine()->getRepository('dataBundle:chien')->findForAdoptionDogs();
        
        return $this->render(
            '@public/memberArea/pages/adoption.html.twig',
            [
                'data'=>$Etats
            ]
        );
    }
    
    public function showAction($dogName ,$dogID){
        $dog = $this->getDoctrine()->getRepository('dataBundle:chien')->findOneBy(['id'=>$dogID]);
        if($dog){
            return $this->render('@public/memberArea/pages/adoption/show.html.twig',['dog'=>$dog]);
        }
    }
}
