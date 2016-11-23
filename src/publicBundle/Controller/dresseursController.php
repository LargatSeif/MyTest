<?php

namespace publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class dresseursController extends Controller
{
    public function indexAction(){
        $list = $this->getDoctrine()->getRepository('dataBundle:dresseurs')->findAll();
        if(!$list){
            $this->createNotFoundException('Unable to find Dresseurs entity.');
        }
        return $this->render(
            '@public/memberArea/pages/dresseurs.html.twig',
            [
                'data'=>$list,
            ]
        );
    }
    public function showAction($dresseurName ,$dresseurID){
        $dresseur = $this->getDoctrine()->getRepository('dataBundle:dresseurs')->findOneBy(['id'=>$dresseurID]);

        return $this->render(
            '@public/memberArea/pages/dresseurs/show.html.twig',
            [
                'entity'=>$dresseur
            ]
        );

    }
}
