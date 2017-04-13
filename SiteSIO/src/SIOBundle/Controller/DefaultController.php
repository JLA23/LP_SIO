<?php

namespace SIOBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SIOBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('SIOBundle:Default:contact.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('SIOBundle:Default:about.html.twig');
    }
}
