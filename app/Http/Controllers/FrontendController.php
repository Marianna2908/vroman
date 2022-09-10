<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function home(){

        return view('home');
    }

    public function contact(){

        return view('contact');
    }
    public function overons(){

        return view('overons');
    }
    public function projecten(){

        return view('projecten');
    }
    public function werkwijze(){

        return view('werkwijze');
    }


}
