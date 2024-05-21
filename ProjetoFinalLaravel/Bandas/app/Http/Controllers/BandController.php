<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandController extends Controller
{

    public function allBands() {

        $allBands = $this -> getAllBands();

        return view('band.all_bands', compact ('allBands'));

    }





    protected function getAllBands() {

        $bands = DB::table('bandas')
        ->get();

        return $bands;
    }


}
