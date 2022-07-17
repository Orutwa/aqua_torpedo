<?php

namespace App\Http\Controllers;

use App\Models\User;

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
}
