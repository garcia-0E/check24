<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Tariff extends Model
{
    use Authorizable, HasFactory;

    public function list($limit, $offset, $sortBy, $network): mixed
    {
        $tariffs = $this->all();
        if ($offset){
            $tariffs = $tariffs->skip($offset);
        }
        if ($limit){
            $tariffs = $tariffs->take($limit);
        }
        if ($sortBy){
            if ($sortBy[1] !== "network"){
                $tariffs = $sortBy[1] == "ASC" ? $tariffs->sortBy($sortBy[1]) : $tariffs->sortByDesc($sortBy[1]);
            }
        }
        if ($network){
            $tariffs = $tariffs->where("network", $network);
        }
        return $tariffs->values();
    }
}
