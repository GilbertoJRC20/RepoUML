<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandController extends Controller
{

    public function home() {

        $allBands = $this -> getAllBands();

        return view('bands.home', compact ('allBands'));

    }





    protected function getAllBands() {

        $bands = DB::table('bandas')
        ->get();

        return $bands;
    }


}
