<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function usersAll() {
        $cesaeInfo = $this -> getCesaeInfo();
        $allUsers = $this -> getUsers();

        return view ('users.all_users', compact ('cesaeInfo', 'allUsers'));
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
        $users = [
            ['id' => 1, 'name' => 'Ana', 'phone' => '912223333'],
            ['id' => 2, 'name' => 'Luis', 'phone' => '912223333'],
            ['id' => 3, 'name' => 'Miguel', 'phone' => '912223333'],
            ['id' => 4, 'name' => 'Jéssica', 'phone' => '912223333'],
            ['id' => 5, 'name' => 'Filipe', 'phone' => '912223333']
        ];

        return ($users);

    }
}

