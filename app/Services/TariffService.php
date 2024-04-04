<?php
namespace App\Services;

use App\Models\Tariff;

class TariffService
{

    public function __construct(private readonly Tariff $tariff)
    {
    }

    public function findTariffById($idTariff)
    {
        $tariff = $this->tariff->where("id", $idTariff)->first();
        return $tariff;
    }

    public function listTariff($limit = null, $offset = null, $sortBy = null, $network = null)
    {
        if ($sortBy){
            $sortBy = explode(":", $sortBy);
        }
        $tariffModelResponse = $this->tariff->list($limit, $offset, $sortBy, $network);
        $count = count($tariffModelResponse);
        $tariffs = $tariffModelResponse;
        return [
            "count" => $count,
            "tariffs" => $tariffs
        ];
    }
}