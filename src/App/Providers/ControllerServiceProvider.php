<?php

namespace App\Providers;

use App\Controller\WithdrawController;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ControllerServiceProvider
 * @package App\Providers
 */
class ControllerServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $pimple
     */
    public function register(Container $pimple)
    {
        $pimple['withdraw'] = function () {
            return new WithdrawController();
        };
    }
}
