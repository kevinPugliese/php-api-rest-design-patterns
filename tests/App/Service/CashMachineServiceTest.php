<?php

use \App\Service\CashMachineService;
use \App\Entity\Withdraw;

/**
 * Class CashMachineServiceTest
 */
class CashMachineServiceTest extends \PHPUnit_Framework_TestCase
{
    private $cashMachineService;
    private $withdraw;

    public function setUp()
    {
        $this->cashMachineService = new CashMachineService();
        $this->withdraw = new Withdraw();
    }

    public function testWithSuccess()
    {
        $withdraw = new Withdraw();
        $withdraw->setValueWithdraw(180);
        $res = $this->cashMachineService->cashOut($withdraw);

        $this->assertEquals([100, 50, 20, 10], $res);
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage Valor inválido.
     */
    public function testValueInvalid()
    {
        $withdraw = new Withdraw();
        $withdraw->setValueWithdraw(179);
        $res = $this->cashMachineService->cashOut($withdraw);

        $this->assertEquals([100, 50, 20, 10], $res);
    }
}
