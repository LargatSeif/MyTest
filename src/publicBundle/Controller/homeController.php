<?php

namespace publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class homeController extends Controller
{
    public function indexAction(){
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            return $this->render('publicBundle:index:index.html.twig');

        }else{
            return $this->redirectToRoute('membersArea');
        }




    }
    public function emailSubscribeAction(){
        return new Response('email subscribtion');
    }
    public function fbSubscribeAction(){
        return new Response('facebook subscribtion');
    }
    public function twitterSubscribeAction(){
        return new Response('twitter subscribtion');
    }
    public function googleSubscribeAction(){
        return new Response('google+ subscribtion');
    }
    public function signInAction(){
        return new Response('membersArea');
    }
}
