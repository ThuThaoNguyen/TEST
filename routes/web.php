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

Route::get('/', function () {
    return view('welcome');
});
Route::get('KhoaHoc',['as'=>'lophoc',function(){
	return "hello everybody";
}]);
Route::get('KhoaHoc/laravel/{ten}',function($ten){
	echo "<h1>welcom you to my website</h1>".$ten;
})->where(['ten'=>'[a-zA-Z]+']);

//goi controller
Route::get('Goicontroller','Mycontroller@XinChao');


Route::get('thamso/{ten}','Mycontroller@Khoahoc');

Route::get('Myrequest','Mycontroller@getURL');

Route::get('getForm',function(){
	return view('postForm');
});

Route::post('postForm',['as'=>'postForm','uses'=>'Mycontroller@postForm']);
