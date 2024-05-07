<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function usersAll() {

        $cesaeInfo = $this -> getCesaeInfo();
        $allUsers = $this -> getUsers();

        $delegadoTurma = DB::table('users')
                        ->where('id', 1)
                        ->where('name', 'Sara')
                        ->first();

                        //dd ($allusers);
        return view ('users.all_users', compact ('cesaeInfo', 'allUsers',
    'delegadoTurma'));
    }


    public function viewUser($id){
        $user = DB::table('users')->where('id', $id)
        ->first();
        //dd($id);

        return view('users.user_view', compact('user'));
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

        $users = User::all();

        //dd($users);

        return $users;

    }




    public function createUser(Request $request) {

        if(isset($request->id)) {
            $request->validate([
                'name' => 'string|max:25',
                'address' => 'string',
                'zip_code' => 'string',
            ]);

            User::where('id', $request->id)
            ->update([
                'name' => $request->name,
                'address' => $request->address,
                'zip_code' => $request->zip_code,
            ]);

            return redirect()->route('users.all')->with('message', 'User atualizado com sucesso!');

        } else {

            $request->validate([
                'name' => 'string|max:25',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5'
            ]);


            User::insert ([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with('message', 'User adicionado com Sucesso');
            //dd($request->all());
        }



    }

}

