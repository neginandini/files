<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
    public function register(){
        return view('admin.pages.register');
    }
    public function login(Request $req){
        $validated=$req->validate([
           'email'=>'required',
           'pass'=>'required',
           'cpass'=>'required',
           'ename'=>'required',
           'age'=>'required',
           'city'=>'required',
           'image'=>'required|mimes:jpg,png,jpeg',
        ],['email.required'=>'*Email is required',
            'pass.required'=>'*Password is required',
            'cpass.required'=>'*Re-enter the password',
            'ename.required'=>'*Name is required',
            'age.required'=>'*Age is required',
            'city.required'=>'*City is required']);
        if($validated){
            $mail=$req->email;
        $pass=$req->pass;
        $cpass=$req->cpass;
        $name=$req->ename;
        $city=$req->city;
        $filename="Image".$mail.".".$req->image->extension();
        if($pass==$cpass){
        if(!is_dir(public_path('users/'.$mail))){
            mkdir(public_path("users/$mail"));
            if($req->image->move(public_path('users/'.$mail),$filename)){
                $imgpath="users/$mail/$filename";
               $fp=fopen(public_path('users/'.$mail."/details.txt"),'w');
               fwrite($fp,"$mail\n$pass\n$name\n$city\n$imgpath");
            //    return back()->with("msg","Successs");
            return redirect("loginform");
            // return $req->input();
              }
              else{
                return back()->with("msg","uploading error");
               }
        }
   else{
    return back()->with("msg","Already register");
   }
}
else{
    return back()->with("msg","password not matching");
}
        }
      else{
        return back()->with("msg","Error"); 
      }
        
    }
public function loginform(){
    return view('admin.pages.loginform');
}
public function home(Request $req){
    $validated=$req->validate([
        'email'=>'required',
        'pass'=>'required',
    ],['email.required'=>'*Email is Required',
'pass.required'=>'*Password is required']);
    if($validated){
        $email=$req->email;
        $password=$req->pass;
        if(is_dir(public_path("users/$email"))){
            $fo=fopen(public_path("users/$email/details.txt"),"r");
            $mail=fgets($fo);
            $pass=fgets($fo);
            $name=fgets($fo);
            $city=fgets($fo);
            $imgg=fgets($fo);
            if(trim($password)==trim($pass)){
                session(['mail' => $mail]);
                session(['pass' => $pass]);
                session(['imgg'=>$imgg]);
                return redirect('dashboard');
                // return redirect("dashboard")->with("mail",$mail);
                // return back()->with("msg","done");
            }
          else{
            return back()->with("msg","Incorrect password");
          }
        }
        else{
            return back()->with("msg","User not found");
        }
    }
    else{
        return back()->with("msg","Fill all the fields");
    }
}
public function dashboard(){
    return view('admin.pages.dashboard');
}
public function change(){
    return view('admin.pages.change');
}
public function orders(){
    return view('admin.pages.orders');
}
public function products(){
    return view('admin.pages.products');
}
public function feedback(){
    return view('admin.pages.feedback');
}
public function category(){
    return view('admin.pages.category');
}
}