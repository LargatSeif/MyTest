<?php

namespace publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class accouplementController extends Controller
{
    public function indexAction(){
        $data = $this->getDoctrine()->getRepository('dataBundle:chien')->findForAccDogs();
        return $this->render(
            '@public/memberArea/pages/accouplement.html.twig',
            [
                'data'=>$data
            ]
        );
    }
    public function showAction($dogName ,$dogID){
        $dog = $this->getDoctrine()->getRepository('dataBundle:chien')->findOneBy(['id'=>$dogID]);
        if($dog){
            return $this->render('@public/memberArea/pages/accoupelemnt/show.html.twig',['dog'=>$dog]);
        }
        else{
            var_dump($dog);die;
        }
    }
}
