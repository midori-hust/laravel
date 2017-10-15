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
Route::get('hello/{user}',function($user){
    return view('hello',compact('user'));
});
Route::get('testblade',function(){
    return view('test');
});

Route::get('call-view',function(){
    return view('home');
});

Route::get('call-controller/{name}/{age}','homecontroller@index')
->where(['name'=>'[a-zA-Z]+','age'=>'[0-9]+']);

Route::get('/',function(){
    $data=DB::table('todolist')->where('id','<>',1)->Where('type',1)->get();
    print_r($data);
});
Route::get('/join',function(){
    $data=DB::table('todolist')->leftjoin('detail','todolist.id','=','detail.work_id')->get();
    print_r($data);
});

Route::get('modeltest','homecontroller@modeltest');

Route::get('collectiontest','homecontroller@test_collection');

Route::get('get-form', 'handleController@getForm');
Route::post('handle-form','handleController@handleRequest');

Route::get('file', 'FileController@index');
Route::post('file', 'FileController@doUpload');