<?php
namespace App\Http\Controllers;
use Illuminate\Support\collection;

use App\Detail;
use App\News;
class homecontroller extends Controller{

    public function index($name, $age){
        echo "Hello $name (Age: $age)";
    }
    public function modeltest(){
        echo 'Count element:'.Detail::all()->count();
        $addnew = News::find(1)->Detail;
        print_r($addnew);
        // $addnew->content = 'what!the hell';
        // $addnew->work_id = 2;
        // $addnew->delete();
        // echo 'Count element:'.Detail::all()->count();
        
    }
    public function test_collection(){
        $data = collection::make([1,2,3,4,56]);
        // print_r($data);
        // $collection = collect(['howtoto','thisthithis']);
        $fitle= $data->filter(function($key,$value){
          return $value > 3;  
        });
        
        echo "<br>Collection :<br>";
       // print_r($collection);
        echo "<br>Fitle :<br>";
        print_r($fitle);
        
    }
}
