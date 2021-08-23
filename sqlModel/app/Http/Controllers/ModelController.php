<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Stockmarket;
class ModelController extends Controller
{
    //
    function show(){
        $data = Stockmarket::all();
        return view('list',['stockmarkets'=>$data]);
    }
}
