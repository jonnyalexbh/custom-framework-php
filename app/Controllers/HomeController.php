<?php

namespace Application\Controllers;

use Application\Models\Entities\User;
use Application\Providers\Doctrine;
use Application\Providers\View;

class HomeController
{
    protected $doctrine;

    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function index()
    {
        $user = $this->doctrine->em->getRepository(User::class)->find(2);
        \Kint::dump($user);
    }

    public function hello(string $name, View $view)
    {
        echo $view->render('home.twig', compact('name'));
    }
}
