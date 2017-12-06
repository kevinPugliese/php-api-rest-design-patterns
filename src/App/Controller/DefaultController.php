<?php

namespace App\Controller;

use Silex\Application;

class DefaultController
{
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function index()
    {
        return "Default Controller";
    }
}
