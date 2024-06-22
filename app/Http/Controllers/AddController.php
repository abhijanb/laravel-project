<?php

namespace App\Http\Controllers;

use App\Models\Add;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAddRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $check = Auth::check();
        if($check){
            return view('add');
        }
        else{
            return redirect()->route('login')->with("error","login in first");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function check(){
        $check = Auth::check();
        if($check){
            return view('add');
        }
    }
    public function create()
    {
        
    }
    

    /**
     * Store a newly created resource in storage.
     */
        //
        public function store(Request $request)
    {
        $check = Auth::check();
        if($check){
        $request->validate([
            'content' => 'required|string',
            'type' => 'required|string',
            'meaning' => 'required|string',
            'file' => 'required|file'
        ]);

        $add = new Add(); // Replace with your actual model instance
        $add->content = $request->input('content');
        $add->type = $request->input('type');
        $add->meaning = $request->input('meaning');
        $file = $request->file('file')->store('file');
        
        $add->save();

        // Optionally, you can return a response or redirect
        return redirect()->route('add.index')->with('success', 'Item added successfully');}
        else{
            return redirect()->route('login')->with('error', 'sign in');}

        }
    
    /**
     * Display the specified resource.
     */
    public function show(Add $add)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Add $add)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAddRequest $request, Add $add)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Add $add)
    {
        //
    }
}
