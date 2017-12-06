<?php

namespace App\Service;

use App\Entity\Withdraw;

/**
 * Class CashMachine
 * @package App\Service
 */
class CashMachineService
{
    const moneyNotes = [100, 50, 20, 10];

    /**
     * @param Withdraw $withdraw
     * @return array
     * @throws \Exception
     */
    public function cashOut(Withdraw $withdraw)
    {
        $value = $withdraw->getValueWithdraw();
        $this->isValidValue($value);
        $withdrawnMoney = $this->getMoney($value);

        return $withdrawnMoney;
    }

    /**
     * @param $value
     * @throws \Exception
     */
    public function isValidValue($value)
    {
        $possibleValue = ($value % 10 == 0);

        if(!$possibleValue) {
            throw new \Exception("Valor inválido.");
        }
    }

    /**
     * @param $value
     * @return array
     */
    public function getMoney($value)
    {
        $withdrawnMoney = array();

        foreach (self::moneyNotes as $money)
        {
            while($money <= $value)
            {
                array_push($withdrawnMoney, $money);
                $value -= $money;
            }
        }

        return $withdrawnMoney;
    }
}
