<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TariffService;
use Illuminate\Http\JsonResponse;
use Throwable;

class TariffController extends Controller
{
    private TariffService $tariffService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TariffService $tariffService)
    {
        $this->tariffService = $tariffService;
    }

    public function listTariffs(Request $request): JsonResponse
    {
        try{
            $limit = $request->input("limit");
            $offset = $request->input("offset");
            $sortBy = $request->input("sortBy");
            $network = $request->input("network");
            $response = $this->tariffService->listTariff($limit, $offset, $sortBy, $network);
            return response()->json([
                "data" => $response,
                "code" => 200
            ]);
        } catch (Throwable $e) {
            return response()->json([
                "error" => "Bad request",
                "code" => 400
            ]);
        }
    }
}
