<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //hien thi trang index
    public function index(){

        return view('index');
    }

    public function about(){

        return view('about');
    }
}
