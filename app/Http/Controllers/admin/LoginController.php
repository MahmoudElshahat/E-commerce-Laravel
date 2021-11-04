<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\loginRequest;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Request;
use App\Models;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Session;
################
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

Class LoginController extends Controller
{
//  ############  getlogin func to use in routes ###########
    public function getLogin(){

        return view('admin.Auth.login');
    }
// ########################## add admin in DB by tinker #########
// public function save()
//     {

//         $admin = new App\Models\Admin();
//         $admin->name = "Ahmed Emam";
//         $admin->email = "admin@gmail.com";
//         $admin->password = bcrypt("Ahmed Emam");
//         $admin->save();
//     }



    #############  login func to check data in db #######################

    public function Login(loginRequest $request){
        // $remember_me=$request ->has('remember_me')? true:false;
       if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])){
           return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login')->with(['error' => 'هناك خطا بالبيانات']);
        }

    }
    //################# start logout function ######################
    public function backhome(){
        return view('front.home');
    }
    // ##################
    public function logout(){
        // must => use Illuminate\Support\Facades\Session;
        
        Session::flush();
        Auth::logout();
         return view('admin.Auth.login');

    }
}
