<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\asset_details;
use App\Models\message;
use App\Models\vehicle_brand;
use App\Models\vehicle_models;
use App\Models\vehicle_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class dataController extends Controller
{
    function reg_vehicle(Request $req){
        $asset=new asset_details;
        $asset->type_id=$req->type_id;
        $asset->brand_id=$req->brand_id;
        $asset->chassis_number=$req->chassis_number;
        $asset->engine_number=$req->engine_number;
        $asset->license=$req->license;
        $asset->color=$req->color;
        $asset->condition=$req->condition;
        $asset->mileage=$req->mileage;
        $asset->associated_user=$req->user_id;
        $asset->status='Hold';
        $asset->condition=$req->condition;
        $asset->save();
        return redirect('/yard');
    }
    function model(Request $req){
        $model=new vehicle_models;
        $model->model_name=$req->model_name;
        $model->save();
        return redirect('dashboard');
        
    }
    function brand(Request $req){
        $brand=new vehicle_brand;
        $brand->brand_name=$req->brand_name;
        $brand->model_id=$req->model_id;
        $brand->save();
        return redirect('dashboard');
    }
    function type(Request $req){
        $type=new vehicle_type;
        $type->name=$req->type_name;
        $type->save();
        return redirect('dashboard');
    }
    function message(Request $req){
        $message= new message;
        $message->name=$req->name;
        $message->phone=$req->contact;
        $message->email=$req->email;
        $message->subject=$req->subject;
        $message->message=$req->message;
        $message->save();
        return redirect('/');
    }
    function read($id){
        $message=message::find($id);
        $message->status=1;
        $message->update();
        return redirect('dashboard');
    }
    function unread($id){
        $message=message::find($id);
        $message->status=0;
        $message->update();
        return redirect('dashboard');
    }
}
