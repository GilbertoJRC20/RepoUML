<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{



    public function getEachBand($id) {

    $bands = DB::table('bandas')
    ->select('twenty_one_pilots.*', 'bandas.id as band_id')
    ->join('bandas', 'bandas.id', '=', 'bandas.band_id')
    ->where('band_id', $id)
    ->first();

    return $bands;

    }
}
