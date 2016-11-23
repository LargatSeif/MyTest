<?php

namespace publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class membersAreaController extends Controller
{
    public function indexAction()
    {
        return $this->render('publicBundle:memberArea:index.html.twig');
    }
}
