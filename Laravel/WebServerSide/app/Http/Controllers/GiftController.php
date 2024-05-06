<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class GiftController extends Controller
{

    public function allGifts() {
        $allGifts = $this -> getAllGifts();

        return view('gifts.gifts', compact ('allGifts'));
    }



    public function viewGifts($id) {
        //dd($id);


        return view('gifts.view', compact ('gifts'));
    }


    public function deleteGifts($id) {

        DB::table('gifts')->where('user_id')-> delete();
        DB::table('users')->where('id')-> delete();

        return redirect()->route('gifts.all');
    }


    public function getEachGift($id) {



        $gifts = DB::table('gifts')
        ->select('gifts.*', 'users.name as user_name')
        ->join('users', 'users.name', '=', 'gifts.user_id')
        ->where('gifts.id', $id)
        ->first();



        return $gifts;
    }
    



    protected function getAllGifts() {

        $gifts = DB:: table('gifts')
            -> get();


        return $gifts;

    }


}
