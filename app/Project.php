<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Project extends Model
{

    public function tasks(){
        return $this->hasMany('App\Task' , 'project_id', 'id');
    }



}
