<?php

namespace publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class shopController extends Controller
{
    public function indexAction(){
        return $this->render(
            '@public/memberArea/pages/shop.html.twig',
            []
        );
    }
}
