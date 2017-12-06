<?php

namespace App\Providers;

use App\Controller\DefaultController;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ControllerServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['default'] = function (Container $pimple) {
            return new DefaultController($pimple);
        };
    }
}
