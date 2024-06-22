<?php

namespace App\Http\Controllers;

use App\Models\Checked;
use Illuminate\Http\Request;

class CheckedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objects = Checked::all();
        return view('checked',['objects' => $objects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new Checked();
        $data->korean = $request->korean;
        $data->nepali = $request->nepali;
$data->save();
return redirect()->route('checkedController.index')->with('success', 'Item added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Checked $checked)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checked $checked)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Checked $checked)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checked $checked)
    {
        //
    }
}
