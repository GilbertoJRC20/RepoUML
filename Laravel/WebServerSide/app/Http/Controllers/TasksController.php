<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TasksController extends Controller
{
    public function viewAllTasks() {
        $allTasks = $this->getAllTasks();
        //dd($allTasks);
        return view('tasks.all_tasks', compact('allTasks'));
    }

    public function addNewTask(Request $request) {

        $request->validate([
            'name' => 'string|max:50',
            'task_description' => 'string|max:255',
            'users_id' => 'required|min:5'
        ]);


        Task::insert ([
            'name' => $request->name,
            'task_description' => $request->task_description,
            'users_id' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('message', 'User adicionado com Sucesso');
    //dd($request->all());

    }


    protected function getAllTasks() {
        $allTasks = DB::table('tasks')
        ->select('tasks.*', 'users.name as usname')
        ->join('users', 'users.id', '=', 'tasks.user_id')
        ->get();
        return $allTasks;
    }
}
