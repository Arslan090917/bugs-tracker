<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class projectController extends Controller
{
    public function createProject(Request $request){
        return view('project')->with(['project'=>$request->project]);
    }
    public function postProject(Request $request){
        $validator = Validator::make($request->all(),[
            'type'=>'required|max:255',
            'href'=>'required|max:255',
            'platform'=>'required|max:255'
        ]);
        if ($validator->fails()){
            dd($validator->getMessageBag());
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $project = new \App\Project;
        $project->project = $request->type;
        $project->href = $request->href;
        $project->platform = $request->platform;
        $project->user_id= \Auth::user()->getKey();
        $project->save();
        return redirect()->route('task.show', ['id'=>$project->getKey()]);

    }
}
