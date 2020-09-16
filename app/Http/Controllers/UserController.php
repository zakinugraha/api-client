<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
   		return response()->json([
   			'success' => true,
   			'message' => 'User found!',
   			'data' => $id
   		]);
    }
}
