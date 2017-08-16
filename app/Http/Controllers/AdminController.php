<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
      //echo "Hello world";
      return view('admin/test');
    }

    public function login()
    {
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            
        }

        dd("Here");
    }
}
