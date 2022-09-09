<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use Session;


use Illuminate\Http\Request;

class customauthcontroller extends Controller
{
public function login(){
return view("auth.login");
}
public function registration(){
return view("auth.registration");
}


public function registerUser(Request $request){
    $request->validate([
        'name'=>'required|alpha',
        'email'=>'required|email|unique:users',
        'contact_no'=>'required|unique:users',
        'password'=>'required|min:8',
        'image'=> 'required'
    ]);
    $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->contact_no=$request->contact_no;
        $user->password=Hash::make($request->password);
        $res= $user->save();

        if($res){
            return back()->with('success' , 'You have registered successfully');
        }
        else{
            return back()->with('fail' , 'Something wrong');
        }

}

public function loginUser(Request $request){
    $request->validate([
        'email'=>'required|email',
        'password'=>'required'
    ]);
    $user= User::where('email' , '=' , $request->email)->first();
    if($user){
        if(Hash::check($request->password, $user->password)){
            $request= session()->put('loginId' , $user->id);
            return redirect('dashboard');
        }
        else{
            return back()->with('fail' , 'Password do not match.');
        }
    }
    else{
        return back()->with('fail' , 'This Email is not registered');
    }
}


// dashboard function
public function dashboard(){
    $data=array();
    if(Session::has('loginId')){
        $data= User::where('id' , '=' , Session::get('loginId'))->first();

    }
    return view('dashboard' , compact('data'));
}
//Logout function

public function logout(){
if(Session::has('loginId')){
    Session::pull('loginId');
    return redirect('login');
}
}
}
