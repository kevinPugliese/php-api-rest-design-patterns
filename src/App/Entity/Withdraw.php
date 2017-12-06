<?php

namespace App\Entity;

/**
 * Class Sake
 * @package App\Entity
 */
class Withdraw
{
    /**
     * @var int
     */
    private $valueWithdraw;

    /**
     * @return int
     */
    public function getValueWithdraw()
    {
        return $this->valueWithdraw;
    }

    /**
     * @param int $valueWithdraw
     */
    public function setValueWithdraw($valueWithdraw)
    {
        $this->valueWithdraw = $valueWithdraw;
    }
}
