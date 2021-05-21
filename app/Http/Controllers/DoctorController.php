<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
  
    public function singup(){
        return view ('/doctorpages/singup');
    }
    public function singin(){
        return view ('/doctorpages/singin');
    }
    public function profile(){
        return view ('/doctorpages/doctorprofile');
    }
    public function schedule(){
        return view ('/doctorpages/schedule');
    }
    public function inbox(){
        return view ('/doctorpages/inbox');
    }
    public function appoinment(){
        return view ('/doctorpages/setappoinmnet');
    }
}
