<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function viewAllTasks() {
        $allTasks = $this->getAllTasks();
        //dd($allTasks);
        return view('tasks.all_tasks', compact('allTasks'));
    }

    protected function getAllTasks() {
        $allTasks = DB::table('tasks')
        ->select('tasks.*', 'users.name as usname')
        ->join('users', 'users.id', '=', 'tasks.user_id')
        ->get();
        return $allTasks;
    }
}
