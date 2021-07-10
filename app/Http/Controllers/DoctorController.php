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
            'clinicid'=>'required|min:2|max:3|regex:/^[0-9]+$/|unique:doctors',
            'gender'=>'required',
            'birth'=>'required',
            'email'=>'required|email',
            'pswd'=>'required|min:5|max:12' ,  
            'cpswd'=>'required|same:pswd' 
        ]);
        $doctor = new Doctor ();        
         $doctor->fname = $request->fname;
         $doctor->lname = $request->lname;
         $doctor->addressclnic = $request->addressclnic;
         $doctor->spicilization= $request->spicilization;
         // if gender femail ---> put image 
         // if gender male ---> put image 
         // else store the image 
         $doctor->clinicid=$request->clinicid;
         $doctor->image = $request->image; 
         $doctor->gender = $request->gender;
         $doctor->birth= $request->birth;
         $doctor->email= $request->email;
         $doctor->password= Hash::make($request->pswd); 
         $res= $doctor->save();  
if($res)
        {return redirect('doctorprofile/'.$doctor->id);}
        else  if(!res){
return back()->with('fail','somthing wrong');
        }
    }
public function changepssword($id){
    if(Session::has('loginId'.$id))
    {
      
        // $id = Session::get('loginId');
return view('/doctorpages/changepassword', compact('id'));
    }
    else {
        // return singup....
    }
}
public function storepassword(Request $request , $id){
if(Session::has('loginId'))
{
    $id = Session::get('loginId'.$id);
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
}
    public function profile($id){
        if(Session::has('loginId'.$id))
        {$doctor = Doctor:: find($id);
        return view('doctorpages/doctorprofile'  , compact ('doctor'));
        }
        else {
            return redirect('/doctorsingup');
        }
    }
    public function editeprofile(  $id  , Request $request  ){
    $doctor=Doctor::find($id);
    $doctor->fname=$request->FirstName;
    $doctor->lname=$request->LastName;
    $doctor->addressclnic = $request->addressclnic;
    $doctor->spicilization= $request->spicilization;
    // $doctor->image = $request->image;
    $doctor->email= $request->email;
    $doctor->save();
    return redirect('doctorprofile/'.$doctor->id);
    }
    //end doctor profule function   
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
    public function schedule(){
        
        return view ('/doctorpages/schedule');
    }
    public function addworkingday($id , Request $request ){
// return $request->all();
$newworkigday= new Workignday();
$newworkigday->startime=$request->starttime;
$newworkigday->endtime = $request->endtime;
$newworkigday->note = $request->note;
// we should working on the make note as null value 
if($request->has('SANDAY')) {
    $newworkigday->SANDAY=$request->SANDAY;

}
else{
    $newworkigday->SANDAY=0;  
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
 
$workingdaylist =Workignday::where ('doctorid','=',$id)->get();
$doctor= Doctor ::where ('id','=',$id)->first();
return  view('/doctorpages/schedule',compact('workingdaylist', 'id' , 'doctor'));

}
 public function editeworkingday($idworkingday )
{
    $workingday=Workignday::where ('id','=',$idworkingday)->first();
    $doctor = Doctor ::where ('id','=',$workingday->doctorid)->first();
    return view ('/doctorpages/editeschedule', compact('workingday', 'doctor' ));
}
 public function storeworkingday($idworkingday , Request $request )
 {

 $workingday=Workignday::where ('id','=',$idworkingday)->first();

$workingday->startime=$request->starttime;
$workingday->endtime = $request->endtime;
$workingday->note = $request->note;

if($request->has('SANDAY')) {
    $workingday->SANDAY=$request->SANDAY;

}
else{
    $workingday->SANDAY=0;  
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
        $doctor= Doctor::where ('id','=',$id)->first();
        $inbox = Appoinment::where ('doctorid','=',$id)->get(); 
// //     $patients = Patient::join('appoinments','patients.id','=','appoinments.pateintid')
// //     ->get(['patients.fname','patients.lname','patients.telephonenumbers','patients.id']);
// // return $patients;
        $patients = Patient ::all();
        return view ('/doctorpages/inbox',compact ('inbox','patients','doctor'));    
    }
    public function appoinment($requestid  ){
        $request = Appoinment :: where ('id','=',$requestid)->first();     
        $patient= Patient::where ('id' ,'=',$request->pateintid)->first();
        $doctor= Doctor::where ('id' ,'=',$request->doctorid)->first();
        return view ('/doctorpages/setappoinmnet',compact('patient','request','doctor'));
        
    }
    public function setappoinment( Request $request ,$id,$doctorid){
       $appoinment= Appoinment:: where ('id','=',$id)->first();
       $appoinment->day=$request->day;
       $appoinment->time=$request->time;
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
    $doctor= Doctor::find($id);
    $AcceptedRequests= Appoinment :: where ('id','=',$id)->get();
    $patients = Patient :: all();
    return view('/doctorpages/patientlist', compact('AcceptedRequests','patients','doctor'));
    }
}
