<?php

namespace App\Http\Controllers;

use App\Models\Kobject;
use App\Models\letter;
use App\Models\Verb;
use Illuminate\Http\Request;


class QuizController extends Controller
{
    //
    public function showQuiz(){
        $letters = letter::all();
        $objects = Kobject::all();
        $verbs = Verb::all();
        return view('quiz',[
            'letters'=>$letters,
            'objects'=>$objects,
            'verbs'=>$verbs
        ]);
        
       
        
        
    
       
    }
}
