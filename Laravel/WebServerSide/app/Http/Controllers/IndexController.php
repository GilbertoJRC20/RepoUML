<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homePage() {
        return view ('home.index');
    }

    public function homeHello() {
        return view ('hello');
    }

}

