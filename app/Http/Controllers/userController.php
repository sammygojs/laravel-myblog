<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function index(){
        echo "this is the userController";
        return view('user');
    }
}
