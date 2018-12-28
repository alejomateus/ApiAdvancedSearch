<?php

namespace App\Http\Controllers;


use App\Models\City;
use App\Helpers\ApiResponse;

class CityController extends Controller
{
    public function index(){
        try{
            $cities=City::all();
            $response = new ApiResponse(200, "Success", $cities);
        }
        catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", [$e->getMessage()]);
        }
        return $response->response();
    }
}
