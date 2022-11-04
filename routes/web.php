<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\userController;
use App\Http\Controllers\signupController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/newlink', [userController::class,'index']);
Route::get('signup', [signupController::class,'index']);
Route::post('signup', [signupController::class,'post']);
Route::get('/user', function () {
    // return view('user',['id'=>$id]);
    // $arr['id']=$id;
    // $arr['product']=$product;
    $array[]="Peter";
    $array[]="John";
    $array[]="Mary";
    $array2['names']=$array;
    return view('user',$array2);
});

Route::get('/about', function () {
    return view('about');
});
