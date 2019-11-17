<?php

namespace Application\Controllers;

use Application\Providers\Doctrine;

class HomeController
{
    protected $doctrine;

    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function index()
    {
        \Kint::dump($this->doctrine);
    }
}
