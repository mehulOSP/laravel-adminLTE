<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function signupIndex(){
		return view('signup');	
	}
	
	public function index(){
		return view('login');
	}

}