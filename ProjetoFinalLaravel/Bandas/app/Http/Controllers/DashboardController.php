<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;


class DashboardController extends Controller
{
    public static function middleware() {

        return ['auth'];
    }


    public function index() {

        return view ('dashboard.home');
    }
}
