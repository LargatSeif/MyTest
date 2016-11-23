<?php

namespace publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class qrController extends Controller
{
    public function indexAction(){
        return $this->render(
            '@public/memberArea/pages/qr.html.twig',
            []
        );
    }
}
