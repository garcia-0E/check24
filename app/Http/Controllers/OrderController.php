<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;
use Exception;

class OrderController extends Controller
{
    private OrderService $orderService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function createOrder(Request $request, int $idTariff)
    {
        try {
            $data = $request->all();
            $response = $this->orderService->createOrder($data, $idTariff);
            if ($response == 200){
                return response()->json([
                    "data" => "Created.",
                    "code" => $response
                ]);
            } elseif ($response == 404){
                throw new Exception("Tariff with the specified id was not found.", 404);
            } elseif ($response == 450){
                throw new Exception("Tariff not available anymore.", 450);
            } else {
                throw new Exception("Bad request", 400);
            }
        } catch (Exception $e) {
            return response()->json([
                "error" => $e->getMessage(),
                "code" => $e->getCode()
            ], $response);
        }
    }

    public function retrieveOrder(Request $request, int $idOrder)
    {
        try {
            $response = $this->orderService->retrieveOrder($idOrder);
            if ($response == 200) {
                return response()->json([
                    "data" => "Created.",
                    "code" => $response
                ]);
            } elseif ($response == 404) {
                throw new Exception("Order with the specified id was not found.", 404);
            }
        } catch (\Throwable $e) {
            return response()->json([
                "error" => $e->getMessage(),
                "code" => $e->getCode()
            ], $response);        }
    }
}
