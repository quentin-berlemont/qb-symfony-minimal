<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function helloAction($name)
    {
        return $this->render(
            'default/hello.html.twig',
            ['name' => $name]
        );
    }
}