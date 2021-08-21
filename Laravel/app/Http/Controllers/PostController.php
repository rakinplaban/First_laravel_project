<?php

namespace App\Http\Controllers\PostController;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    //
    public function index(){
        $json = json_decode(file_get_contents(base_path("resources/lang/stock_market_data.json")),true);
        $collection = collect($json);
        $uniquedate = $collection->unique('date');
        dd($uniquedate);
        return view('index');
    }
}
