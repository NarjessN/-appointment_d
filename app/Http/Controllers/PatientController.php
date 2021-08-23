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
        'diseases'=>'required',
        'telephonenumbers'=>'required|regex:/(09)[0-9]{8}/|digits:10',
        'email'=>'required|email',
        'password'=>'required|min:5|max:12' ,  
        'pswd'=>'required|same:password' 
    
    ]);
    $patient = new Patient();
    $patient->fname = $request->fname;
    $patient->lname = $request->lname;
    $patient->telephonenumbers = $request->telephonenumbers;
    $patient->diseases=$request->diseases;
    if (isset($request->image)) {
           
        $imagename=  $patient->fname. "." . $request->image->getClientOriginalExtension();
      
        $patient->image=$imagename;
     $request->image->move('upload',$imagename);
     } 
    $patient->password= Hash::make($request->password);
    $patient->email=$request->email;
    $res=$patient->save();
if($res){
    $request->session()->put('loginId'.$patient->id,$patient->id); 
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
    if(Session::has('loginId'.$id))
    {
        return view ('/patientpages/changepassword',compact ('id'));
    }
    else{
        return redirect('/patientsingin'); 
    }
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
    if(Session::has('loginId'.$id))
    {
        $patient = Patient :: where ('id','=',$id)->first();
        return view ('/patientpages/profile' , compact('patient'));
    }
    else{
        return redirect('/patientsingin');
    }
    
   }
   public function edite($id){
       if(Session::has('loginId'.$id))
       {
        $patient = Patient :: where ('id','=',$id)->first();
        return view ('/patientpages/editeprofile', compact('patient'));
       }
       else{
        return redirect('/patientsingin');
       }
    
   }
   public function find($id){
       if(Session::has('loginId'.$id))
       {
        $patient = Patient :: where ('id','=',$id)->first();
        return view ('/patientpages/filtering',compact('patient'));
       }
       else{
        return redirect('/patientsingin');
       }
       
   }

   public function booking($idpatient,$iddocotr){
       if(Session::has('loginId'.$idpatient))
       {
        $workingdays= Workignday :: where ('doctorid','=',$iddocotr)->get();
       
        $patient =  Patient::where('id','=',$idpatient)->first();
        return view ('/patientpages/bookingform', compact('patient','workingdays','iddocotr'));
       }
       else {
        return redirect('/patientsingin'); 
       }
   
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
       $patient = Patient :: where ('id','=',$id)->first();
       
       $docotrs =Doctor ::all();
       if(Session('loginId'.$patient->id))
       {
        return view ('/patientpages/request', compact('patient','id','temprequests','docotrs'));
       }
       else {
        return redirect('/patientsingin');   
       }
   }
public function responce($id){
    
 $patient = Patient :: where ('id','=',$id)->first();  
 if(Session::has('loginId'.$patient->id))
 {
    $responces = Appoinment :: where ('pateintid','=',$id)->get(); 
    $docotrs = Doctor::all();
   return view ('/patientpages/responce', compact('patient','responces','docotrs','id'));
 }
 else {
    return redirect('/patientsingin'); 
 }


}
public function filtering($id , Request $request)
{
    if(Session::has('loginId'.$id))
    {
        $docotrs = Doctor :: where ('spicilization','=',$request->spicilization)->get();
        $patient = Patient :: where ('id','=',$id)->first();
        return   view ('/patientpages/filteringresult', compact('docotrs','patient'));
    }
    else{
        return redirect('/patientsingin');    
    }

}
public function editing($id, Request $request ){
    $patient = Patient :: where ('id','=',$id)->first();
    //$patient->description= $request->description; here we should it to the data base
    $patient->diseases=$request->diseases;
    $patient->telephonenumbers=$request->phonenumber;
    if (isset($request->image)) {
           
        $imagename=  $patient->fname. "." . $request->image->getClientOriginalExtension();
      
        $patient->image=$imagename;
        $request->image->move('upload',$imagename);
    
}
$res=$patient->save();
if($res)
{
 return redirect('patientprofile/'.$patient->id);
}
// else return error massage
}
public function viewdoctorprofile($idpateint , $iddoctor){
    if(Session::has('loginId'.$idpateint))
    {
        $doctor = Doctor :: where ('id','=',$iddoctor)->first();
        $patient= Patient :: where ('id','=',$idpateint)->first();
    return view ('/patientpages/doctorprofile',compact('doctor','patient'));
    }
    else {
        return redirect('/patientsingin');    
    }

}

}
