<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcountRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $password = md5($request->password );
        User::create(['name'=>$request->name,'email'=>$request->email , 'password'=> $password]);

        return view('welcome');
    }
    public function Login(Request $request){

        $user = User::where('email',$request->email)->first();
        if( ! isset( $user)){
            return redirect()->back()->withErrors(['error'=>'this account not fountd ']);
        }
        if(  $user and  md5($request->password) == $user->password  ) {
            return view('welcome');
        }
        return redirect()->back()->withErrors(['error'=>'rowng password ']);

    }


}
