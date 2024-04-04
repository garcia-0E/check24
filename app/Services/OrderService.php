<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Tariff;
use Carbon\Carbon;
use Exception;

class OrderService
{

    public function __construct(private readonly  TariffService $tariffService, private readonly Order $order)
    {
    }

    public function createOrder($orderData, $idTariff)
    {
        if (!empty($orderData)){
            $tariff = $this->tariffService->findTariffById($idTariff);
            if (!$tariff){
                return 404;
            } elseif (Carbon::now()->gt($tariff->valid_until)){
                return 450;
            }
            $order = new Order([
                "customer_first_name" => $orderData["firstName"],
                "customer_last_name" => $orderData["lastName"],
                "tariff_id" => $idTariff
            ]);
            $order->save();
            return 200;
        } else{
            return 500;
        }
    }

    public function retrieveOrder($idOrder)
    {
        $order = $this->order->where("id", $idOrder)->first();
        if (!$order){
            return 404;
        }
        $orderResponse = [
            "firstName" => $order->customer_first_name,
            "lastName"  => $order->customer_last_name,
            "idTariff"  => $order->tariff_id
        ];
        return $orderResponse;
    }
}
