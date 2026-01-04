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

      // $allabouts = json_decode(json_encode($allabouts),true);
      // echo "<pre>";
      // print_r($allabouts);
      // die;

    

      return view('profile.index',compact('allabouts'));


   }
   public function contacttable(){
      // $allcontacts = Contact::all();
     
      // $allcontacts = json_decode(json_encode($allcontacts),true);
      // echo "<pre>";
      // print_r($allcontacts);
      // die;

   //   $somecontacts =  Contact::where('email','arbin67@gmail.com')->get();
   // $somecontacts = contact::where('email','arbin67@gmail.com')->first();
   
   // $somecontacts = contact::findOrFail(100);
    $somecontacts = Contact::all();

      // $somecontacts = json_decode(json_encode($somecontacts),true);
      // echo "<pre>";
      // print_r($somecontacts);
      // die;



      return view('contact.index',compact('somecontacts'));
   }
   public function addresstable(){
      $alladdresses = Address::all();

      // $alladdresses = json_decode(json_encode($alladdresses),true);
      // echo "<pre>";
      // print_r($alladdresses);
      // die;

      // $someaddress = address::findOrFail(2);

      //   $someaddress = json_decode(json_encode($someaddress),true);
      // echo "<pre>";
      // print_r($someaddress);
      // die;
      

      return view ('Address.index',compact('alladdresses'));
   }

   public function addressView($id){
      $someaddress = Address::findOrFail($id);

      return view('Address.addressview', compact('someaddress'));
   }

   public function profileview($id){
      $someprofile = About::findOrFail($id);

      return view('profile.profileview', compact('someprofile'));
   }

   public function contactview($id){
      $somecontact = Contact::findOrFail($id);

      return view('contact.contactview', compact('somecontact'));
   }

   
}