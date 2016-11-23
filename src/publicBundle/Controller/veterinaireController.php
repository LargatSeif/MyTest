<?php

namespace publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class veterinaireController extends Controller
{
    public function indexAction(){
        $list = $this->getDoctrine()->getRepository('dataBundle:veterinaire')->findAll();
        if(!$list){
            $this->createNotFoundException('Unable to find Veterinaire entity.');
        }
        return $this->render(
            '@public/memberArea/pages/veterinaire.html.twig',
            [
                'data'=> $list
            ]
        );
    }
    public function showAction($vetName ,$vetID){
        $vet = $this->getDoctrine()->getRepository('dataBundle:veterinaire')->findOneBy(['id'=>$vetID]);
        if(!$vet){
            $this->createNotFoundException('Unable to find Veterinaire entity.');
        }
        return $this->render(
            '@public/memberArea/pages/veterinaire/show.html.twig',
            [
                'entity'=>$vet
            ]
        );

    }
}
