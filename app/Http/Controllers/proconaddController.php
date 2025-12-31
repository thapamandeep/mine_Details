<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proconaddController extends Controller
{
   public function show(){
    return view('documents.default');
   }
   
   public function proview(){
    return view('documents.profile');
   }
   
   public function conview(){
      return view('documents.contact');
   }

   public function addview(){
      return view('documents.address');
   }
}
