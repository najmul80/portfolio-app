<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $user = User::where('email','satner@gmail.com')->first();
        return view('home',['user'=>$user]);
    }


}
