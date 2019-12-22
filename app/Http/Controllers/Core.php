<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Core extends Controller
{
    public function test($id){
        echo $id;
        //echo __METHOD__;
    }
}
