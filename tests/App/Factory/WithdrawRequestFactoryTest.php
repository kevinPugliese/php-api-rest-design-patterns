<?php

use \App\Factory\WithdrawRequestFactory;

class WithdrawRequestFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateMethodWhenAnyObjectNotExistShouldReturnAnException()
    {
        $request = \Symfony\Component\HttpFoundation\Request::create('/', 'get', ['valorSaque' => 180]);

        $withdraw = WithdrawRequestFactory::create($request);
        $this->assertInstanceOf(
            'App\\Entity\\Withdraw',
            $withdraw
        );
    }
}
