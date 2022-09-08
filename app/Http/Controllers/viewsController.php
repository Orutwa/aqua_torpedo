<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\asset_details;
use App\Models\message;
use App\Models\User;
use App\Models\vehicle_brand;
use App\Models\vehicle_models;
use App\Models\vehicle_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class viewsController extends Controller
{
    function vehicle(){
        $types=vehicle_type::all();
        $models=vehicle_models::all();
        $brands=vehicle_brand::all();
        $users= User::all();
        return view('vehicles', ['types'=>$types, 'models'=>$models,'users'=>$users,'brands'=>$brands, 'message'=>'']);
    }
    function dashboard(){
        $users= User::all();
        $models=vehicle_models::all();
        $brands=vehicle_brand::all();
        $messages=message::all();
        $vehicles=asset_details::join('vehicle_types', 'asset_details.type_id', '=', 'vehicle_types.id')
        ->join('vehicle_brands', 'asset_details.brand_id', '=', 'vehicle_brands.id')
        ->select('vehicle_types.*', 'asset_details.*', 'vehicle_brands.*' , 'vehicle_types.id as type_id', 'vehicle_types.name as type', 'vehicle_brands.id as brand_id')
        ->get();
        return view('dashboard', ['clients'=>$users,'models'=>$models,'vehicles'=>$vehicles,
        'brands'=>$brands,'messages'=>$messages]);
    }
}
