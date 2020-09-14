<?php
 
 namespace App\Http\Controllers;


 class AdminController extends Controller
 {
    
   public function __construct()
   {
      
   }

   public function index()
   {
      // $data = $this->operation->getServicesStatus();
      // $posts = $this->operation->getLatesrIncidents();
      $data = Null;
      $post = Null;
      return view('admin.index');
   }
    
 }