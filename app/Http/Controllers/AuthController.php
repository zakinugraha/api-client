<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getLogin()
    {
    	return view('login');
    }

    public function postLogin(Request $request)
    {
    	$data = $request->all();
    	dd($data);
    }

    public function getRegister()
    {
    	return view('register');
    }

    public function postRegister(Request $request)
    {
    	$data = $request->all();
    	dd($data);
    }


}
