<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\User;
use App\Project;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class historyController extends Controller
{
    public function history(){
        $user = Auth::user();
        $user->load('projects');
        $project = new Project();
        return view('history')->with(['projects'=>$user->projects,
                                            'project2'=> $project->all()]);


    }
}
