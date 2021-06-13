<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Appoinment;
class PatientController extends Controller
{
   public function singup(){
       return view('/patientpages/singup');
   }
   public function register(Request $request ){
    $patient = new Patient();
    $patient->fname = $request->fname;
    $patient->lname = $request->lname;
    $patient->telephonenumbers = $request->telephonenumbers;
    $patient->image = $request->image;
    $patient->email = $request->email;
    $patient->password= $request->password;
    $patient->save();
    return redirect('patientprofile/'.$patient->id);
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
   public function booking($id){
       // we should pass doctor id 
       $patient =  Patient::where('id','=',$id)->first();
       return view ('/patientpages/bookingform', compact('patient'));
   }
   public function store(Request $request , $id ){
$appoinmnet = new Appoinment();

$appoinmnet->day=$request->day;

$appoinmnet->description = $request->description;

// we should make it changable 
$appoinmnet->doctorid=1;
$appoinmnet->pateintid=$id;
$appoinmnet->save();
   }
   public function request(){
       return view ('/patientpages/request');
   }

public function responce(){
    return view ('/patientpages/responce');
}
}
