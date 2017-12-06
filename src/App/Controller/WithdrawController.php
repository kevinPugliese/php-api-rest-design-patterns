<?php

namespace App\Controller;

use App\Factory\WithdrawRequestFactory;
use App\Service\CashMachineService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class WithdrawController
 * @package App\Controller
 */
class WithdrawController
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $withdrawRequest = WithdrawRequestFactory::create($request);
            $cashMachineService = new CashMachineService();
            $money = $cashMachineService->cashOut($withdrawRequest);

            return new JsonResponse(
                ['money' => $money],
                200
            );
        } catch (\UnexpectedValueException $e) {

            return new JsonResponse(
                ['message' => $e->getMessage()],
                500
            );
        } catch (\Exception $e) {

            return new JsonResponse(
                ['message' => $e->getMessage()],
                500
            );
        }
    }
}
