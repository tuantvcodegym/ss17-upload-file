<?php

namespace App\Http\Controllers;

use App\Tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index(){
        $tasks = \App\Tasks::all();

        return view('index', compact('tasks'));
    }
    public function create()
    {
        return view('add');
    }

    function store(Request $request){
        $task = new Tasks();
        $task->Tasktitle = $request->inputTitle;
        $task->Content = $request->inputContent;

        $file = $request->inputFile;
        if(!$request->hasFile('inputFile')){
            $task->image = $request->inputFileName;
        }else{
            $fileName = $request->file('inputFile');
            $path = $fileName->store('image', 'public');
            $task->image = $path;
        }
        $task->save();

        return redirect()->route('tasks.index', compact('task'));
    }

}
