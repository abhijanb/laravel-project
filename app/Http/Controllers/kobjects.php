<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kobjects extends Controller
{
    public function showKobjects(){
        $data = DB::table('kobjects')->get();
        return view('object',['objects'=>$data]);
    }
}
