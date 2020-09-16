<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        $api_url = config('api.api_url').'/login';
        // dd($api_url);
        $responseDetail = Http::withHeaders([
            'content-type' => 'application/json'
        ])->post($api_url, [
            'email' => $data['email'],
            'password' => $data['password']
        ]);
        $status_code = $responseDetail->getStatusCode();
        $result = $responseDetail->json();
    	dd($result);
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
