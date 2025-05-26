<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Your registration logic here
        return response()->json(['message' => 'User registered successfully.']);
    }
}
