<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class GiftsController extends Controller
{

    public function allGifts() {
        $allGifts = $this -> getAllGifts();

        return view('gifts.gifts', compact ('allGifts'));
    }



    public function viewGifts($id) {
        //dd($id);

        return view('gifts.gifts_view');
    }


    public function deleteGifts($id) {

        DB::table('gifts')->where('user_id')-> delete();
        DB::table('users')->where('id')-> delete();

        return redirect()->route('gifts.all');
    }


    public function getEachGift($id) {

        $gifts = DB::table('gifts')
        ->select('gifts.*', 'users.name as user_id')
        ->join('users', 'users.id', '=', 'gift.user_id')
        ->get();

        return $gifts;
    }


    protected function getAllGifts() {

        $gifts = DB:: table('gifts')
                -> get();


        return $gifts;

    }
}
