<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Appoinment;
use App\Doctor;
use App\Workignday;
use Hash;
use Session;
class PatientController extends Controller
{
   public function singup(){
       return view('/patientpages/singup');
   }
   public function register(Request $request ){
    $request->validate([
        'fname'=>'required|unique:patients' ,
        'lname'=>'required|regex:/^[a-zA-Z ]+$/',
        'telephonenumbers'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:10',
        //if male or femal 
        // for the image 
        'email'=>'required|email',
        'password'=>'required|min:5|max:12' ,  
        'pswd'=>'required|same:password' 
    
    ]);
    $patient = new Patient();
    $patient->fname = $request->fname;
    $patient->lname = $request->lname;
    $patient->telephonenumbers = $request->telephonenumbers;
    $patient->image = $request->image;
    $patient->password= Hash::make($request->password);
    $patient->email=$request->email;
    $res=$patient->save();
if($res){
    return redirect('patientprofile/'.$patient->id);
}
   }
   public function singin(){
       return view ('/patientpages/singin');
   }
  public function logincheckd(Request $request ){
    $request->validate([
         'fname'=>'required' ,
          'password'=>'required|min:5|max:12'          
    
    ]);  
    $user = Patient:: where ('fname','=',$request->fname)->first();
  
    if($user)
    {
        if(Hash::check($request->password,$user->password))
          {
     $request->session()->put('loginId'.$user->id,$user->id); 
     
     return  redirect('patientprofile/'.$user->id); 
    }
    else {
        return back()->with('fail','Password does not matches. ');
    }
   
  }
  else{
    return back()->with('fail','patient is not register. ');
}

  }
  public function logout($id){
    
    if(Session::has('loginId'.$id))
    {
        
        Session::pull('loginId'.$id); 
        return redirect('/patientsingin');
    }
  }
public function changpassword($id)
{
    
return view ('/patientpages/changepassword',compact ('id'));
}   
public function storepassword( Request $request, $id){
    $request->validate([
        'oldpassword'=>'required|min:5|max:12' ,  
        'newpassword'=>'required|min:5|max:12',
        'confirmpassword'=>'required|same:newpassword'
        
    ]);
    $user =Patient::find($id);
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
       $patient = Patient :: where ('id','=',$id)->first();
       return view ('/patientpages/profile' , compact('patient'));
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
// $appoinmnet->appoinmentstatus="non";
$appoinmnet->save();
return redirect('yourrequest/'.$idpatient);
   }
   public function request($id){
    
       $temprequests = Appoinment :: where ('pateintid','=',$id)->get(); 

    //    foreach($temprequests as $request )
    //    {
    //        $requests = Appoinment :: where ('appoinmentstatus','=','non')->get();
    //    }
    //    $patient = Appoinment :: where ('pateintid','=',$id)->first();
       
       $docotrs =Doctor ::all();
       
       return view ('/patientpages/request', compact('id','temprequests','docotrs'));

  
   }


public function responce($id){
$responces = Appoinment :: where ('pateintid','=',$id)->get(); 
 $docotrs = Doctor::all();
return view ('/patientpages/responce', compact('responces','docotrs','id'));

}
public function filtering($id , Request $request)
{
$docotrs = Doctor :: where ('spicilization','=',$request->spicilization)->get();
$patient = Patient :: where ('id','=',$id)->first();
return   view ('/patientpages/filteringresult', compact('docotrs','patient'));
}
}
