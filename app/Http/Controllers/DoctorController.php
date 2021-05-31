<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Workignday;
class DoctorController extends Controller
{
//  registration function start 
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
        return redirect('doctorprofile/'.$doctor->id);
        // return redirect('/profile/'.$user->id); 
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
    //  registration function end 
    // start  edite doctor profile function 
    public function profile($id){
        $doctor = Doctor:: find($id);
        return view('doctorpages/doctorprofile'  , compact ('doctor'));
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
   
    public function schedule(){
        
        return view ('/doctorpages/schedule');
    }
    public function addschedule($id , Request $request ){
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

    }
public function  getschedule($id)
{
     
}

    public function inbox(){
        return view ('/doctorpages/inbox');
    }
    public function appoinment(){
        return view ('/doctorpages/setappoinmnet');
    }
}
