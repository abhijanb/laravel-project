<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Verbs extends Controller
{
    public function showVerbs(){
        $data = DB::table('verbs')->get();
        return view('verbs', ['verbs' => $data]);
    }
}
