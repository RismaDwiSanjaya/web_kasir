<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // function index(){
    //     echo "halo,selamat datag ";
    //     echo "<h1>" . Auth::user()->name . "</h1>";
    //     echo "<a href='logout'>Logout>></a>";
    // }

    function admin(){
       return view('admin.dashboard');
    }

    function petugas(){
         return view('admin.dashboard');
    }

    function pimpinan(){
      return view('admin.dashboard');
    }
}
