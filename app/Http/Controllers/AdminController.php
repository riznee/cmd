<?php
 
 namespace App\Http\Controllers;

use App\Operations\Operation;

 class AdminController extends Controller
 {
    
   public function __construct(Operation $operation)
   {
      $this->operation = $operation;
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