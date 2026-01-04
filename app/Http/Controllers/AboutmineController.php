<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Address;

use Illuminate\Support\Facades\Session;

class AboutmineController extends Controller
{
    public function profilestore(Request $request){
           
        $data = $request->validate([
                'sureName' => 'required|string',
                'firstName' => 'required|string',
                
        ]);

      
            $document = new About();
            $document-> surename = $data['sureName'];
            $document-> firstname = $data['firstName'];
  
          $document->save();
        
            return view('documents.profile');
    }
     
    public function contactstore(Request $request){

     $data = $request->validate([
          'yourNumber' => 'required|integer',
        'yourEmail' => 'required|email|string'
      ]);

     

        $contact = new Contact();
        $contact-> email = $data['yourEmail'];
        $contact-> number = $data['yourNumber'];
    
        $contact->save();
        
Session::flash('success_message','contactform submitted successfully');

        return view('documents.contact');
}

public function addressstore(Request $request){
  $data = $request->validate([
    'addressName' => 'required|string',
    'streetNumber' => 'required|integer'
    
  ]);

 $address = new Address();
 $address-> city = $data['addressName'];
 $address-> street = $data['streetNumber'];

 $address->save();

Session::flash('success_message','addressform submitted successfully');

 return view('documents.address');
}
}