<?php

namespace App\Http\Controllers;

use App\Models\asset_details;
use App\Models\messages;
use App\Models\User;
use App\Models\vehicle_brand;
use App\Models\vehicle_models;
use App\Models\vehicle_type;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class mainController extends Controller
{
    function registration(Request $req){
        //password=year_@_username
        $pass=$req->f_name;
        $password=date('Y').'_@_'.$pass;
        $user=new User;
        $user->first_name=$req->f_name;
        $user->last_name=$req->l_name;
        $user->middle_name=$req->m_name;
        $user->nin_number=$req->nin_number;
        $user->tin_number=$req->tin_number;
        $user->phone=$req->phone;
        $user->email=$req->email;
        $user->address=$req->address;
        $user->country=$req->country;
        $user->gender=$req->gender;
        $user->verified=0;
        $user->password=Hash::make($password);
        $user->company=$req->company;
        $user->role='User';
        $user->save();
        return redirect('/');
    }
    function login(Request $req){
        $username=$req->email;
        $user=User::where(['email'=>$username])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return redirect(back());
        }
        else{
            return redirect('dashboard');
        }
    }
    function vehicle(){
        $types=vehicle_type::get('id', 'name');
        $brands=vehicle_brand::get('id','brand_name');
        return view('vehicles', ['types'=>$types, 'brands'=>$brands, 'message'=>'']);
    }
    function reg_vehicle(Request $req){
        $asset=new asset_details;
        $asset->type_id=$req->type_id;
        $asset->brand_id=$req->brand_id;
        $asset->chassis_nuber=$req->chassis_number;
        $asset->engine_number=$req->engine_number;
        $asset->license=$req->license;
        $asset->color=$req->color;
        $asset->condition=$req->condition;
        $asset->mileage=$req->mileage;
        $asset->associate_user=Session::get('user')['id'];
        $asset->status='Hold';
        $asset->save();
        return redirect('/yard',['message'=>'Vehicle Registration successiful']);
    }
}
