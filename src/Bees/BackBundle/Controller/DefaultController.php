<?php

namespace Bees\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BeesBackBundle:Default:index.html.twig');
    }
}
