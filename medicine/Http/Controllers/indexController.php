<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class indexController extends Controller
{
    public function getIndex(){
               
        return view('index.welcome');
    }
}
