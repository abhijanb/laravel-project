<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class letters extends Controller
{
    public function showData(){
        $data = DB::table('letters')->get();
        return view('letters',['letters' => $data]);
    }
}
