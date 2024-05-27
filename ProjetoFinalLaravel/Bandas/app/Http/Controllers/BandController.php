<?php

namespace App\Http\Controllers;


use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MetallicaAlbum;
use App\Models\TwentyOnePilotsAlbum;
use App\Models\FooFightersAlbum;
use App\Models\ParkwayDriveALbum;
use App\Models\RedHotAlbum;
use App\Models\LinkinParkAlbum;

class BandController extends Controller
{

    public function home() {

        $bands = Band::all();


        return view('bands.home', compact ('bands'));
    }

    public function show($id) {

        $band = Band::find($id);
        if (!$band) {
            return redirect()->route('bands.index')->with('error', 'Banda não encontrada.');
        }

    }



    protected function getAllBands() {

        $bands = DB::table('bandas')
        ->get();

        return $bands;
    }


}
