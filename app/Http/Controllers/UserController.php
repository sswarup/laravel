<?php

namespace App\Http\Controllers;

use App\User;
use Request;
use Session;
use Auth;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function signup(){
        Session::flash('signup', 1);
        return view('users.signup');
    }
    
    public function login(){
        return view('users.login');
    }
    
    public function getIn(UserRequest $request){
        $input = $request->all();
        $credentials = ['email'=>$input['email'],'password'=>$input['password']];
        if(Auth::attempt($credentials, true)){
            Session::put('user', $user);
            return redirect('/articles');
        }else{
            Session::flash('loginError','Wrong email or password.');
            return redirect ('/login');
        }
    }
    
    public function register(UserRequest $request){
        $input = $request->all();
        $user = User::createUser($input);
        return redirect('/articles');
    }
    
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
