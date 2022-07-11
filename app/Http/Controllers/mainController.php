<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class mainController extends Controller
{
    function registration(Request $req){
        $user=new User;
        $user->f_name=$req->f_name;
        $user->username=($req->f_name).'23';
        return ($req->f_name).date('YH');
    }
}
