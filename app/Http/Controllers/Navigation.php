<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navigation extends Controller
{
    //



    public function RegisterContainers(){
        return view("LadingPage");
    }

    public function ProductOverzicht(){
        return view("OverviewPage");
    }
}
