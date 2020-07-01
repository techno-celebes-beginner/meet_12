<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function register(){
		return view("form");
	}

	public function submitted(Request $request){
		$nama_lengkap = $request['first_name'] . " " . $request['last_name'];
		return view("welcome")->with("complete_name",$nama_lengkap);
	}
}
