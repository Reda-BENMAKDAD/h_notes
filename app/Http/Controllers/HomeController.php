<?php

namespace App\Http\Controllers;

use Illuminate\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function redirect()
    // {
    //     if(Auth::id())
    //     {
    //         if(Auth::user()->usertype=='0')
    //         {
    //             return view('user.home');
    //         }

    //     }
    //     else
    //         {
    //             return view('admin.home');
    //         }
    // }

    
    public function index()
    {
        return view('user.home');
    }
}
