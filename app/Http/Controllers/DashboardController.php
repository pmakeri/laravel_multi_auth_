<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    
    public function index()
    {
        if (Auth::user()->hasRole('user')) {
            return view('user.userdash');
        }

        elseif (Auth::user()->hasRole('blogwriter')) {
            return view('blogwriter.blogwriterdash');
        }
        
        elseif (Auth::user()->hasRole('admin')) {
            return view('admin.admindash');
        }
    }

    public function myprofile()
    {
        return view('user.myprofile');
    }

    public function createpost()
    {
        return view('blogwriter.createpost');
    }
}
