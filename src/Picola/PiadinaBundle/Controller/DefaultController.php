<?php

namespace Picola\PiadinaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PicolaPiadinaBundle:Default:index.html.twig', array());
    }
}
