<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function usersAll() {
        return view ('users.all_users');
    }
}
