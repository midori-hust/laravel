<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Http\UploadedFile;

class FileController extends Controller{
    public function index(){
        return view('DemoUpload');
    }
    public function doUpload(Request $request){
        
        if(!($request->hasFile('filesTest'))) {
            echo 'No file';
            return;
        }
        $file = $request->filesTest;
        $file->move('upload', $file->getClientOriginalName());
    }

    public function printinfo(array $file){
        echo 'Name file :'.$file->getClientOriginalName();
        echo '<br/>';
        
        //Take extension File
        echo 'Extension file :'.$file->getClientOriginalExtension();
        echo '<br/>';
        
        //Take path file 
        echo 'Path file :'.$file->getRealPath();
        echo '<br/>';
        
        //take size file
        echo 'Size file'.$file->getSize();
        echo '<br/>';
        
        //Take type file 
        echo 'Type File :'.$file->getMimeType(); 
    }
    
}