<?php

namespace App\Factory;

use Symfony\Component\HttpFoundation\Request;

interface InterfaceRequestFactory
{
    public static function create(Request $request);
}
