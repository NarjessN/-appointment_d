<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
   public function singup(){
       return view('/patientpages/singup');
   }
   public function singin(){
       return view ('/patientpages/singin');
   }
   public function profile(){
       return view ('/patientpages/profile');
   }
   public function edite(){
       return view ('/patientpages/editeprofile');
   }
   public function find(){
       return view ('/patientpages/filtering');
   }
   public function filtering(){
       return view ('/patientpages/filteringresult');
   }
   public function booking(){
       return view ('/patientpages/bookingform');
   }
   public function request(){
       return view ('/patientpages/request');
   }

public function responce(){
    return view ('/patientpages/responce');
}
}
