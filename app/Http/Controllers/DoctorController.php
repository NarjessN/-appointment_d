<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use DB;
class DoctorController extends Controller
{
  
    public function singup(){
        return view ('/doctorpages/singup');
    }
    public function register(Request $request ){
        $doctor = new Doctor ();        
         $doctor->fname = $request->fname;
         $doctor->lname = $request->lname;
         $doctor->addressclnic = $request->addressclnic;
         $doctor->spicilization= $request->spicilization;
         $doctor->image = $request->image;
        //  $doctor->gender = $request->gender;
         $doctor->birth= $request->birth;
         $doctor->email= $request->email;
         $doctor->password= $request->pswd; 
         $doctor->save();
        //  return view ('doctorpages/doctorprofile',compact('doctor'));
       return view ('doctorpages/doctorprofile',compact ('doctor'));
        // return $doctor->id;
       
        // $doctor=  Doctor::create ([
        //     $doctor->fname => $request->fname,
        //     $doctor->lname => $request->lname,
        //      $doctor->addressclnic => $request->addressclnic,
        //  $doctor->spicilization => $request->spicilization,
        //  $doctor->image => $request->image,
  
        //  $doctor->birth=> $request->birth,
        //  $doctor->email=> $request->email,
        //  $doctor->password=>$request->pswd, 


        // ]);   

    }
    // public function validation ($request)
    // {
    //     return $this->validation($request,[
    //         'fname' => ['required', 'max:255' ],
    //         'lname' => ['required', 'max:255'],
    //         'addressclnic' => ['required',  'max:255'],
    //         'spicilization' => ['required', 'max:255'],
    //         'birth' => ['required',  'max:255'],
    //         'image' => ['required',  'max:255'],
    //         'gender' => ['required',  'max:255'],
    //         'email' => ['required',  'max:255','email'],
    //         'password' => ['required', 'max:10','confirmend'],
    //     ]);
        
    // }
    public function singin(){
        return view ('/doctorpages/singin');
    }
    // public function profile(){
    //     // $doctor = Doctor::where ('id','=',$id)->first();
    //     return view('/doctorpages/doctorprofile');

        
    // }
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
