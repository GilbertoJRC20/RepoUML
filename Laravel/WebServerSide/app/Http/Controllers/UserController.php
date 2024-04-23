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
        ->where ('name', 'lili')->first();

        //dd ($allusers);
        return view ('users.all_users', compact ('cesaeInfo', 'allUsers',
    'delegadoTurma'));
    }


    public function viewUser(){
        return view('users.user_view');
    }

    public function addUser(){

        DB:: table('users')
        -> updateOrInsert(
            [
            'email'=> 'Sara@gmail.com',
            ],
            [
            'name' => 'Sara',
            'password'=> 123456,
            'updated_at'=>now()
        ]);
    }


    public function getAllTasks() {
        $allTasks = DB::table('tasks')
        ->get();
        return $allTasks;
    }

    public function viewAllTasks() {
        $allTasks = $this->getAllTasks();
        //dd($allTasks);
        return view('tasks.all_tasks', compact('allTasks'));
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

