<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Workignday;
use App\Appoinment;
use App\Patient;
use DB;
use Validator;
use Hash ;
use Session;
class DoctorController extends Controller
{
//  registration function start 
    public function singup(){
        
       
        return view ('/doctorpages/singup');
        
    }
    public function register(Request $request ){
        $request->validate([
            'fname'=>'required|regex:/^[a-zA-Z ]+$/' ,
            'lname'=>'required|regex:/^[a-zA-Z ]+$/',
            'addressclnic'=>'required',
            'spicilization'=>'required',
            'services'=>'required',
            'clinicid'=>'required|min:2|max:3|regex:/^[0-9]+$/|unique:doctors',
            'insurancecompanies'=>'required',
            'gender'=>'required',
            'birth'=>'required',
            'email'=>'required|email',
            'pswd'=>'required|min:5|max:12' ,  
            'cpswd'=>'required|same:pswd' ,
            // 'image'=>'required | mimes:jpeg ,png , jpg'
        ]);
        $doctor = new Doctor ();        
         $doctor->fname = $request->fname;
         $doctor->lname = $request->lname;
         $doctor->addressclnic = $request->addressclnic;
         $doctor->spicilization= $request->spicilization;
         $doctor->description = $request->services;
         $doctor->clinicid=$request->clinicid;
         $doctor->insurancecompanies=$request->insurancecompanies;
       
        if (isset($request->image)) {
           
            $imagename= $doctor->clinicid. "." . $request->image->getClientOriginalExtension();
          
         $doctor->image=$imagename;
         $request->image->move('upload',$imagename);
         } 
         $doctor->gender = $request->gender;
         $doctor->birth= $request->birth;
         $doctor->email= $request->email;
         $doctor->association = $request->Association;
         $doctor->password= Hash::make($request->pswd); 
         $res= $doctor->save(); 
        
if($res)
        {
            $request->session()->put('loginId'.$doctor->id,$doctor->id);  
            return redirect('doctorprofile/'.$doctor->id);
        }

        else  if(!res){
            return 0;
// return back()->with('fail','somthing wrong');
        }
    }
public function changepssword($id){
    $id = Session::get('loginId'.$id); 
    $user = Doctor::find($id);
    if($user)
    {
      
        // $id = Session::get('loginId');
return view('/doctorpages/changepassword', compact('id'));
    }
    else {
        return redirect('/doctorsingin');
    }
}
public function storepassword(Request $request , $id){
// if(Session::has('loginId'))
// {
//     $id = Session::get('loginId'.$id);
    $request->validate([
            'oldpassword'=>'required|min:5|max:12' ,  
            'newpassword'=>'required|min:5|max:12',
            'confirmpassword'=>'required|same:newpassword'
            
        ]); 
        $user = Doctor::find($id);
        if(Hash::check($request->oldpassword,$user->password))
        {
           $user->password= Hash::make($request->newpassword); 
           $user->save();
           return back()->with('success','password changed.'); 

        }
        else {
            return back()->with('fail','wrong password.'); 
        }
        

}
    public function profile($id){
        if(Session::has('loginId'.$id))
        {$doctor = Doctor:: find($id);
        return view('doctorpages/doctorprofile'  , compact ('doctor'));
        }
        else {
            return redirect('/doctorsingin');
        }
    }
    public function editeprofile(  $id  , Request $request  ){
    
       $request->validate([
        'fname'=>'regex:/^[a-zA-Z ]+$/' ,
        'lname'=>'regex:/^[a-zA-Z ]+$/',
        'email'=>'email',
         
    ]);
    
    $doctor=Doctor::find($id);
    $doctor->fname=$request->FirstName;
    $doctor->lname=$request->LastName;
    $doctor->addressclnic = $request->addressclnic;
    $doctor->description= $request->description;
    if (isset($request->image)) {
        
        $imagename= rand() . "." . $request->image->getClientOriginalExtension();
     $doctor->image=$imagename;
     $request->image->move('upload',$imagename);
     } 
    $doctor->email= $request->email;
    $doctor->insurancecompanies= $request->insurancecompanies;
    $doctor->save();
    return redirect('doctorprofile/'.$doctor->id);
    }
     
    public function singin(){
        return view ('/doctorpages/singin');
    }
    public function logincheckd(Request $request ){
        $request->validate([
            'clinicid'=>'required|min:2|max:3|regex:/^[0-9]+$/',
            'pswd'=>'required|min:5|max:12'   
             
        ]);
        $user = Doctor :: where ('clinicid','=',$request->clinicid)->first();
       
        if($user){
        if(Hash::check($request->pswd,$user->password))
        {
            // return "'".$user->id."'";
        
        $request->session()->put('loginId'.$user->id,$user->id);
        //  return Session::get('loginId'.$user->id);
        return  redirect('doctorprofile/'.$user->id);
        }
        else{
            return back()->with('fail','Password does not matches. ');
        }
        }
        else{
            return back()->with('fail','this clinic id is not register. ');
        }
    }
   public function docotorlogout($id){
       if(Session::has('loginId'.$id))
       {
           
           Session::pull('loginId'.$id); 
           return redirect('/doctorsingin');
       }
   }
    // public function schedule(){
        
    //     return view ('/doctorpages/schedule');
    // }
    public function addworkingday($id , Request $request ){
// return $request->all();
$newworkigday= new Workignday();
$newworkigday->startime=$request->starttime;
$newworkigday->endtime = $request->endtime;
$newworkigday->note = $request->note;
// we should working on the make note as null value 
if($request->has('SUNDAY')) {
    $newworkigday->SUNDAY=$request->SUNDAY;

}
else{
    $newworkigday->SUNDAY=0;  
}
if($request->has('MONDAY')) {
    $newworkigday->MONDAY=$request->MONDAY;

}
else{
    $newworkigday->MONDAY=0;  
}
if($request->has('TUESDAY')) {
    $newworkigday->TUESDAY=$request->TUESDAY;

}
else{
    $newworkigday->TUESDAY=0;  
}
if($request->has('WENESDAY')) {
    $newworkigday->WENESDAY=$request->WENESDAY;

}
else{
    $newworkigday->WENESDAY=0;  
}
if($request->has('THURSDAY')) {
    $newworkigday->THURSDAY=$request->THURSDAY;

}
else{
    $newworkigday->THURSDAY=0;  
}
if($request->has('FRIDAY')) {
    $newworkigday->FRIDAY=$request->FRIDAY;

}
else{
    $newworkigday->FRIDAY=0;  
}
if($request->has('SATURDAY')) {
    $newworkigday->SATURDAY=$request->SATURDAY;

}
else{
    $newworkigday->SATURDAY=0;  
}
$newworkigday->doctorid = $id;
$newworkigday->save();

return redirect('doctorschedule/'.$id);

    }
    
public function  getschedule($id)
{
    if(Session::has('loginId'.$id))
    {
        $workingdaylist =Workignday::where ('doctorid','=',$id)->get();
        $doctor= Doctor ::where ('id','=',$id)->first();
        return  view('/doctorpages/schedule',compact('workingdaylist', 'id' , 'doctor'));
    }
    else {
        return redirect('/doctorsingin');
    }


}
 public function editeworkingday($idworkingday )
{
    
    $workingday=Workignday::where ('id','=',$idworkingday)->first();
    if(Session::has('loginId'.$workingday->doctorid))
    {
        $doctor = Doctor ::where ('id','=',$workingday->doctorid)->first();
        return view ('/doctorpages/editeschedule', compact('workingday', 'doctor' ));
    }
    else{
        return  redirect('/doctorsingin');
    }
 
}
 public function storeworkingday($idworkingday , Request $request )
 {

 $workingday=Workignday::where ('id','=',$idworkingday)->first();

$workingday->startime=$request->starttime;
$workingday->endtime = $request->endtime;
$workingday->note = $request->note;

if($request->has('SUNDAY')) {
    $workingday->SUNDAY=$request->SUNDAY;

}
else{
    $workingday->SUNDAY=0;  
}
if($request->has('MONDAY')) {
    $workingday->MONDAY=$request->MONDAY;

}
else{
    $workingday->MONDAY=0;  
}
if($request->has('TUESDAY')) {
    $workingday->TUESDAY=$request->TUESDAY;

}
else{
    $workingday->TUESDAY=0;  
}
if($request->has('WENESDAY')) {
    $workingday->WENESDAY=$request->WENESDAY;

}
else{
    $workingday->WENESDAY=0;  
}
if($request->has('THURSDAY')) {
    $workingday->THURSDAY=$request->THURSDAY;

}
else{
    $workingday->THURSDAY=0;  
}
if($request->has('FRIDAY')) {
    $workingday->FRIDAY=$request->FRIDAY;

}
else{
    $workingday->FRIDAY=0;  
}
if($request->has('SATURDAY')) {
    $workingday->SATURDAY=$request->SATURDAY;

}
else{
    $workingday->SATURDAY=0;  
}
$workingday->save();
return redirect('doctorschedule/'.$workingday->doctorid);
}
public function deletworkingday($workingdayid){
$workingday=Workignday::where ('id','=',$workingdayid)->first();
$workingday->delete();
return redirect('doctorschedule/'.$workingday->doctorid);
} 
public function inbox($id){
    if(Session::has('loginId'.$id))
    {
        $doctor= Doctor::where ('id','=',$id)->first();
        $inbox = Appoinment::where ('doctorid','=',$id)->get(); 
// //     $patients = Patient::join('appoinments','patients.id','=','appoinments.pateintid')
// //     ->get(['patients.fname','patients.lname','patients.telephonenumbers','patients.id']);
// // return $patients;
        $patients = Patient ::all();
        return view ('/doctorpages/inbox',compact ('inbox','patients','doctor')); 
    }
    else {
         return redirect('/doctorsingin');
    }
     
    }
    public function appoinment($requestid){
        $request = Appoinment :: where ('id','=',$requestid)->first(); 
        if(Session::has('loginId'.$request->doctorid))
        {
               
            $patient= Patient::where ('id' ,'=',$request->pateintid)->first();
            $doctor= Doctor::where ('id' ,'=',$request->doctorid)->first();
            return view ('/doctorpages/setappoinmnet',compact('patient','request','doctor'));
    }
 else {
    return redirect('/doctorsingin');
 }
        
    }
    public function setappoinment( Request $request ,$id,$doctorid){
       $appoinment= Appoinment:: where ('id','=',$id)->first();
       $appoinment->day=$request->day;
       $appoinment->time=$request->time;
       $appoinment->doctornote=$request->notes;
       $appoinment->appoinmentstatus=$request->appointment;
       $appoinment->save();
       $doctor= Doctor::where ('id','=',$doctorid)->first();
       $inbox = Appoinment::where ('doctorid','=',$doctorid)->get();
       $patients = Patient ::all();
       return view ('/doctorpages/inbox',compact ('inbox','patients','doctor'));
        
    }
     public function rejectappoinment( $requestid , $doctorid){
         $request = Appoinment:: where ('id','=',$requestid)->first();
         $request->appoinmentstatus="reject";
         $request->save();
         $doctor= Doctor::where ('id','=',$doctorid)->first();
         $inbox = Appoinment::where ('doctorid','=',$doctorid)->get();
         $patients = Patient ::all();
         return view ('/doctorpages/inbox',compact ('inbox','patients','doctor'));  
     }
    public function patientlist($id){
        if(Session::has('loginId'.$id))
        {
            
            $doctor= Doctor::find($id);
            $AcceptedRequests= Appoinment :: where ('doctorid','=',$id)->get();
            $patients = Patient :: all();
           
            return view('/doctorpages/patientlist', compact('AcceptedRequests','patients','doctor'));
    }
    else {
        return redirect('/doctorsingin');

    }
  
    }
}
