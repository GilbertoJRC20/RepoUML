<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function usersAll() {
        $cesaeInfo = $this -> getCesaeInfo();
        $allUsers = $this -> getUsers();

        $delegadoTurma = DB::table('users')
        ->where ('name', 'Liliana')->first();

        //dd ($allusers);
        return view ('users.all_users', compact ('cesaeInfo', 'allUsers',
    'delegadoTurma'));
    }


    public function viewUser($id){
        //dd($id);
        return view('users.user_view');
    }


    public function deleteUser($id){

        DB::table('tasks')->where('user_id', $id)-> delete();
        DB::table('users')->where('id', $id)-> delete();

        return redirect()->route('users.all');
    }



    public function addUser(){

        DB:: table('users')
        -> updateOrInsert(
            [
            'name'=> 'Sara',
            ],
            [
            'email' => 'Sara@gmail.com',
            'password'=> 123456,
            'updated_at'=>now()
        ]);
    }


    protected function getCesaeInfo() {
        $cesaeInfo = [
            'name' => 'Cesae',
            'adress' => 'Rua Ciríaco Cardoso 186, 4150-212 Porto',
            'email' => 'cesae@cesae.pt'
        ];

        return      $cesaeInfo;
    }

    protected function getUsers() {
        /*$users = [
            ['id' => 1, 'name' => 'Ana', 'phone' => '912223333'],
            ['id' => 2, 'name' => 'Luis', 'phone' => '912223333'],
            ['id' => 3, 'name' => 'Miguel', 'phone' => '912223333'],
            ['id' => 4, 'name' => 'Jéssica', 'phone' => '912223333'],
            ['id' => 5, 'name' => 'Filipe', 'phone' => '912223333']
        ];*/

        $users = DB:: table('users')
                -> get();

        //dd($users);

        return $users;

    }
}

