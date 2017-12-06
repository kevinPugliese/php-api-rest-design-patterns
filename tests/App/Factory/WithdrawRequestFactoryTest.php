<?php

use \App\Factory\WithdrawRequestFactory;

class WithdrawRequestFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException UnexpectedValueException
     * @expectedExceptionMessage Parametro valorSaque não foi passado na URL
     */
    public function testCreateMethodWhenAnyObjectNotExistShouldReturnAnException()
    {
        $request = \Symfony\Component\HttpFoundation\Request::create('/', 'get', ['valorSaque' => '']);

        $withdraw = WithdrawRequestFactory::create($request);
        $this->assertInstanceOf(
            'App\\Entity\\Withdraw',
            $withdraw
        );
    }

    public function testCreateMethodWhenAnyObjectShouldReturnAnSuccess()
    {
        $request = \Symfony\Component\HttpFoundation\Request::create('/', 'get', ['valorSaque' => 180]);

        $withdraw = WithdrawRequestFactory::create($request);
        $this->assertInstanceOf(
            'App\\Entity\\Withdraw',
            $withdraw
        );
    }
}
