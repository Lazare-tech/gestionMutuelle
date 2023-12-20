<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
     public function contact_us()
    {
        return view('menu.contact');
    }
    //
    public function about_us()
    {
        return view('menu.about');
    }
}
