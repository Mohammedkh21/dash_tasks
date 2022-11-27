<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcountRegisterRequest;
use App\Mail\resetPasswordMail;
use App\Mail\UserVerifyMail;
use App\Models\password_reset;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function  RegisterPage(){
        return view('user_auth/register');
    }
    public function  LoginPage(){
        return view('user_auth/login');
    }
    public function  ForgerPasswordPage(){
        return view('user_auth/forgetPassword');
    }


    public function Register(AcountRegisterRequest  $request){

        $password =   Hash::make($request->password);  //md5($request->password );
        $user = User::create(['name'=>$request->name,'email'=>$request->email , 'password'=> $password])  ;

        $token = md5(time());
        $UserVerify = UserVerify::create(['user_id' => $user->id, 'token' => $token]);

        //Mail::to($user)->send(new UserVerifyMail($token));

        return redirect()->back()->with(['message'=>'Verify your email']); // 'Verify your email';
    }
    public function Login(Request $request){


        if(  Auth::guard()->attempt($request->only('email','password'))   ) {
            //return view('home');
            return response()->json(['message'=>'login succeeded']);
        } 

        return response()->json(['message'=>'email not found or password false'],404);
    }

    public function logout(){
        \Illuminate\Support\Facades\Auth::logout();
        return redirect()->route('Route_login');
    }

    public function email_verify($token){
        $UserVerify =  UserVerify::where('token',$token)->with('user')->first();
        $UserVerify->user->email_verified_at ;//= date('Y-m-d H:i:s');
        $UserVerify->user->save();
        $UserVerify->delete();


        return 'your account are verify now';
    }


    public function resetPasswordPage(){
        return view('user_auth/forgetPassword');
    }
    public function resetPassword(Request $request){

        if(  $user = User::where('email' , $request->email)->first() ){
            $token = md5(time());
            password_reset::create(['email'=>$request->email,'token'=>$token,'created_at' => date('Y-m-d H:i:s')]);

            Mail::to($user)->send(new resetPasswordMail($token));
            return 'check your email to reset password';
        }
          return  redirect()->back()->withErrors(['error'=>'your email not exist']);
    }
    public function resetPasswordCheckToken($token){
        $password_reset = password_reset::where('token',$token)->first() ;
        if( isset( $password_reset ) ){
            return view('user_auth/resetPassword',compact('token'));
        };
        return 'that link invalid';
    }

    public function setNewPassword(Request $request){
        $token = $request->token;
        $request->validate(['password'=>'required','password_confirm'=>'required|same:password']);
        password_reset::where('token',$token)->delete();
        return  response()->json(['status' => true ]);


    }












}
