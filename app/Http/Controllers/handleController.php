<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;

class handleController extends Controller{
    public function getForm(){
        return view('FormRequest');
    }
  public function handleRequest(Request $request){
      echo "out out";
      print_r($request->all());
      $errors = $this->validate($request, 
        [
            'name'=>'required|min:5|max:25',
        ],
        [
            'required'=>':attribute not null',
            'min'=>':attribute not min :min',
            'max'=>':attribute not max :max',
        ],
        [
          'name'=>'user name', 
        ]);
        echo "Why <br/>";
        print_r($errors);
        
        // if($errors->has('name')){
        //     echo $errors->first('name');
        // }
    
  }
}