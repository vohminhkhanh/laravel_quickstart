<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Database;
use App\Http\Requests\StoreTask;

class QuickStartController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('index', compact('tasks'));
    }

    public function addTask(Request $request)
    {
        $task = $request->only('name');
        Task::create($task);

        return  redirect('qstart');
    }

    public function deleteTask(Task $tasks)
    {
        $tasks->delete();

        return redirect('qstart');      
    }
    
    public function changeLanguage($locale)
    {
        Session::put('locale',$locale);

        return redirect()->back();
    }
}
