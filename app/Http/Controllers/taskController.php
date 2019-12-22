<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
Use App\Task;
use App\Project;

class taskController extends Controller
{
    public function postTask(Request $request){
        $validator = Validator::make($request->all(),
                ['ids'=>'required|max:255',
                'name' => 'required|max:255',
                'type'=>'required|max:255']);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $path = $request->file('img')->store('upload','public');
        $path2 = $request->file('img2')->store('upload', 'public');
        $task = new \App\Task;
        $task->imgHref = $path;
        $task->hash = $request->ids;
        $task->name = $request->name;
        $task->example = $path2;
        $task->type = $request->type;
        $task->project_id = $request->project_id;
        $task->save();
        return redirect()->route('task.show', ['id'=>$task->project_id]);
    }

    public function getTask(Request $request){
        $task = \App\Task::where('project_id', $request->route('id'))->get();
//        dd($request->route('id'));

        return view('task',['task' => $task]);
    }



}
