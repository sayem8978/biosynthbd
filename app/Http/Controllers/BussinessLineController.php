<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BussinessLineController extends Controller
{
    public function index(){
        return view('bussiness-line.index');
    }
    public function aboutus(){
        return view('bussiness-line.about-us');
    }
}
