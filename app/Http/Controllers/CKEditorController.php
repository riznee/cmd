<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKEditorController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->storeAs('public/uploads', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$fileName);
            // $url = asset('images/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
}


// namespace App\Http\Controllers;
 
// use Illuminate\Http\Request;
 
// class CKEditorController extends Controller
// {
//     public $permissonName='upload';

//     public function __construct()
//     {
        
//         $this->setPermission($this->permissonName);
//         parent::__construct();

//     }

//     public function setPermission($permission)
//     {
//         $this->middleware('permission:'.$this->permissonName , ['only' => ['upload']]);
//     }

//     public function upload(Request $request)
//     {
//         if($request->hasFile('upload')) {
//             //get filename with extension
//             $filenamewithextension = $request->file('upload')->getClientOriginalName();
      
//             //get filename without extension
//             $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      
//             //get file extension
//             $extension = $request->file('upload')->getClientOriginalExtension();
      
//             //filename to store
//             $filenametostore = $filename.'_'.time().'.'.$extension;
      
//             //Upload File
//             $request->file('upload')->storeAs('public/uploads', $filenametostore);
 
//             $CKEditorFuncNum = $request->input('CKEditorFuncNum');
//             $url = asset('storage/uploads/'.$filenametostore);
//             $msg = 'Image successfully uploaded';
//             $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             
//             // Render HTML output
//             @header('Content-type: text/html; charset=utf-8');
//             echo $re;
//         }
//     }
// } -->

// <?php