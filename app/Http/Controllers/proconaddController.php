<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Address;

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
   public function profiletable(){
      $allabouts = About::all();

      $allabouts = json_decode(json_encode($allabouts),true);
      echo "<pre>";
      print_r($allabouts);
      die;

    

      return view('profile.index',compact('allabouts'));


   }
   public function contacttable(){
      $allcontacts = Contact::all();
     
      $allcontacts = json_decode(json_encode($allcontacts),true);
      echo "<pre>";
      print_r($allcontacts);
      die;

      return view('contact.index',compact('allcontacts'));
   }
   public function addresstable(){
      $alladdresses = Address::all();

      $alladdresses = json_decode(json_encode($alladdresses),true);
      echo "<pre>";
      print_r($alladdresses);
      die;

      return view ('Address.index',compact('alladdresses'));
   }


   
}