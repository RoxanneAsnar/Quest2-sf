<?php

namespace CoavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoavBundle:test:index.html.twig', [
            'name' => "toto",
        ]);
    }
}
