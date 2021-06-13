<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
class UserController extends Controller
{
    public  function index(){
        $users = UserInfo::all();
        return view("user",["data"=>$users]);
    }
}
