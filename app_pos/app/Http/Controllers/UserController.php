<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Request\Login;
use DB;
use Redirect;
use Auth;
use Request;

class UserController extends Controller
{
    
     public function login()
    {
      $credential = ['email'=>Request::get('email'),'password'=>Request::get('password')];
     if(auth()->attempt($credential))
     {
      
        return Redirect::to('dashboard');
      }
     else
     {
        return Redirect::to('login')->with('message','login gagal, silahkan login lagi!');
      //return 'gagal login';
     }  
    }

    public function register()
    {
    	$email = Request::get('email');
    	$name = Request::get('username');
    	$password = Request::get('password');
    	$data = array('email'=>$email,
    				'name'=>$name,
    				'password'=>bcrypt($password));

    	DB::table('users')->insert($data);
    	return Redirect::to('/login');
    }
}
