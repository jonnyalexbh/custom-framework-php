<?php

namespace Application\Controllers;

use Application\Providers\Doctrine;
use Application\Models\Entities\User;

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
}
