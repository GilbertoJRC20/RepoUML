<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function homepage() {

        /**$band = {
            'nome' =
            'foto' =
            'nº álbuns' =
        }*/


        return view('home.index');
    }




}
