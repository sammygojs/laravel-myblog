<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupController extends Controller
{
    //
    public function index(Request $request){
        // echo "signup page";
        // echo "$id ";
        echo $request->method();
        return view('signup');
    }

    public function post(Request $request){
        $array['email'] = "required|email";
        $array['password'] = "required|min:4";

        $validated = $request->validate($array);
        print_r($request->all());
        return view('signup');
    }
}
