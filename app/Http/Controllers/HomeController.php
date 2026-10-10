<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homepage()
    {
        return view('home.homepage');
    }

    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype === 'admin') {
                return view('admin.adminhome');
            }

            // normal user
            return view('home.homepage');
        }

        return view('home.homepage');
    }
}
 