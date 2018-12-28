<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\City;
use App\Models\Crimes;
use App\Models\Offender;
use App\Models\OffenderCrime;
use DB;
use Illuminate\Http\Request;

class OffenderCrimeController extends Controller
{
    public function advancedsearch(Request $request){
        try{
            $data=null;
            $offenders=Offender::query();
            if($request->first_name!= null && $request->first_name!= ''){
                $offenders->where("first_name","like",'%'.$request->first_name.'%');
            }
            if($request->second_name!= null && $request->second_name!= ''){
                $offenders->where("second_name","like",'%'.$request->second_name.'%');
            }
            if($request->first_lastname!= null && $request->first_lastname!= ''){
                $offenders->where("first_lastname","like",'%'.$request->first_lastname.'%');
            }
            if($request->second_lastname!= null && $request->second_lastname!= ''){
                $offenders->where("second_lastname","like",'%'.$request->second_lastname.'%');
            }
            if($request->num_id!= null && $request->num_id!= ''){
                $offenders->where("num_id","like",'%'.$request->num_id.'%');
            }
            if($request->gender!= null && $request->gender!= ''){
                $offenders->where("gender","=",$request->gender);
            }
            $offenders->where("birthdate",">=",$request->startdate);
            $offenders->where("birthdate","<=",$request->enddate);
            if(sizeof($request->cities)>0){
                $cont=0;
                foreach ($request->cities as $city){
                   if($cont ==0)
                       $offenders->where("id_city","=",$city["id"]);
                    else
                        $offenders->orWhere("id_city","=",$city["id"]);
                    $cont++;
                }
            }
            $offendersarray =$offenders->get();
            if(sizeof($request->crimes)>0){
                $crimesoffender=OffenderCrime::query()->distinct('id_offender');
                foreach ($request->crimes as $crime){
                    foreach ($offendersarray as $ofender){
                            $crimesoffender->orWhere([
                                ["id_offender","=",$ofender->id],
                                ["id_crime","=",$crime["id"]]
                            ]);
                    }
                }
                $crimesoffenderarray = $crimesoffender->get();
                $filteroffenders=Offender::query();
                  foreach ($crimesoffenderarray as $crimeoffender){
                      $filteroffenders->orWhere("id","=",$crimeoffender->id_offender);
                    }
                $offendersarray=$filteroffenders->get();
            }
            foreach ($offendersarray as $offender){
                $offender["crimes"]=OffenderCrime::query()->where("id_offender","=",$offender->id)->get();
                $offender->city;
                foreach ($offender["crimes"] as $crime){
                    $crime->name=$crime->crime->name;
                }
            }
            $data =$offendersarray;
            $response = new ApiResponse(200, "Success", $data);
        }
        catch (\Exception $e) {
            $response = new ApiResponse(500, "Error", [$e->getMessage()]);
        }
        return $response->response();

    }
}
