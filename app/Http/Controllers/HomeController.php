<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $logo = "storage/assets/logo-sfundo.png";
        return view('/layouts.store');
    }
}
