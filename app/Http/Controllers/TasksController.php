<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	//$task = DB::table('tasks')->latest()->get();
		$task = Task::all();
	    return view('tasks.index', compact('task'));
    }

    public function show(Task $task) //Task::find(wildcard);
    {
    	//$task = DB::table('tasks')->find($id);
		//$task = Task::find($id);
		

	    return view('tasks.show', compact('task'));
    }
}
