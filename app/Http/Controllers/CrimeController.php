<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Crime;
use Illuminate\Http\Request;

class CrimeController extends Controller
{
    public function index(){
        try{
            $crimes=Crime::all();
            $response = new ApiResponse(200, "Success", $crimes);
        }
        catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", [$e->getMessage()]);
        }
        return $response->response();
    }
}
