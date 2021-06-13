<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Appoinment;
use App\Doctor;
use App\Workignday;
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
   public function find($id){
       $patient = Patient :: where ('id','=',$id)->first();
       return view ('/patientpages/filtering',compact('patient'));
   }
//    public function filtering(){
//        return view ('/patientpages/filteringresult');
//    }
   public function booking($idpatient,$iddocotr){
       $workingdays= Workignday :: where ('doctorid','=',$iddocotr)->get();
       
       $patient =  Patient::where('id','=',$idpatient)->first();
       return view ('/patientpages/bookingform', compact('patient','workingdays','iddocotr'));
   }
   public function store(Request $request , $idpatient,   $iddoctor){
$appoinmnet = new Appoinment();

$appoinmnet->day=$request->day;

$appoinmnet->description = $request->description;


$appoinmnet->doctorid=$iddoctor;
$appoinmnet->pateintid=$idpatient;
$appoinmnet->save();

   }
   public function request(){
       return view ('/patientpages/request');
   }

public function responce($id){
    $responces = Appoinment :: where ('pateintid','=',$id)->get(); 
 $docotrs = Doctor::all();
    return view ('/patientpages/responce', compact('responces','docotrs'));

}
public function filtering($id , Request $request)
{
$docotrs = Doctor :: where ('spicilization','=',$request->spicilization)->get();
$patient = Patient :: where ('id','=',$id)->first();
return   view ('/patientpages/filteringresult', compact('docotrs','patient'));
}
}
