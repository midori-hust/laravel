<?php

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

Route::get('Route1',['as'=>'MyRoute',function(){
    echo "Hello you!";
}]);
Route::get('Route2', function(){
    echo "This is my route 2";
})->name('MyRoute2');

Route::get('Callname',function(){
    return redirect()->route('MyRoute2');
});
Route::group(['prefix'=>'Mygroup'],function(){
   Route::get('User1',function(){
       echo "User1";
   }) ;
   Route::get('User2',function(){
       echo "User2";
   });
   Route::get('User3',function(){
       echo 'User3';
   });
   
});
