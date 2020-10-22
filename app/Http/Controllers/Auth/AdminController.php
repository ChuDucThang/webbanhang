<?php

namespace App\Http\Controllers\Auth;


use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	// public function __construct(){
	// 	$this->middleware('auth:admin');
	// }
	// 
    public function login(){
    	return view('user.login');
    }

    public function post_login(Request $request){
    	$this->validate($request,[
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    	],[
    		'email.required' => 'Không được để trống',
    		'password.required' => 'Không được để trống',
    	]);

    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)) {
    		return redirect()->route('backend.index')->with('success','Đăng nhập vào hệ thống thành công.'); 
    	}
    	return redirect()->back();
    }

     public function logout(){
     	Auth::guard('admin')->logout();
     	return redirect()->route('backend.login');
     }
}
