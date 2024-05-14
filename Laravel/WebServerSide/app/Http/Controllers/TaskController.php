<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TaskController extends Controller
{
    public function allTasks() {

        $tasks = $this->getAllTasks();
        //dd($allTasks);

        return view('tasks.all_tasks', compact('tasks'));
    }

    protected function getAllTasks() {
        $tasks = DB::table('tasks')
        ->select('tasks.*', 'users.name as usname')
        ->join('users', 'users.id', '=', 'tasks.user_id')
        ->get();

        //dd($tasks);

        return $tasks;
    }


    public function addTask(){
        $users = DB::table('users')
        ->get();

        return view ('tasks.add_new', compact('users'));
    }

    public function addNewTask(Request $request) {

        //if has an id, its an update
        if(isset($request->id)){
            $request -> validate ([
                'name' => 'required|string|max:20',
                'description' => 'required|string\max:255',
                'due_at' => 'date',
            ]);

            db::table('tasks')->where('id', $request->id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'due_at' => $request->due_at,
            ]);
            return redirect()->route('tasks.all')->with('message', 'Tarefa actualizada com sucesso!');

        } else {

            $request->validate([
                'name' => 'string|max:20',
                'task_description' => 'required|string|max:255',
                'users_id' => 'required|min:5'
            ]);


            DB::table('tasks')->insert ([
                'name' => $request->name,
                'task_description' => $request->task_description,
                'users_id' => $request->user_id,
            ]);

            return redirect()-> route('tasks.all')->with('message', 'Tarefa adicionada com sucesso!');
            //dd($request->all());

        }
    }

    public function editTask($id) {
        $task = DB::table('tasks')
        ->where('id', $id)
        ->first();

        $allUsers = DB::table('users')
        ->get();

        return view('tasks.edit', compact('task', 'allUsers'));
    }

}
