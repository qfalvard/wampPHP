<?php

namespace App\Controller;

class PageController extends AbstractController
{
    public function index(){
        echo $this->container->getTwig()->render('/page/index.html.twig');
    }
}
