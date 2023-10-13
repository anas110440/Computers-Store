<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{

    public function index()
    {
        return view('computers.index', [
            'computers' => Computer::all()
        ]);
    }

    // ________________________________________________________________________

    public function create()
    {
        return view('computers.create');
    }

    // ________________________________________________________________________


    public function store(Request $request)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => ['required','integer']
        ]);
        $computer =  new Computer();
        $computer-> name = strip_tags($request->input('computer-name')) ;
        $computer-> origin = strip_tags($request->input('computer-origin')) ;
        $computer-> price = strip_tags($request->input('computer-price'))  ;
        $computer-> save();
        return redirect()->route('computers.index');
    }

    // ________________________________________________________________________


    public function show($id)
    {
        return view('computers.show', [
            'computer'=> Computer::findOrFail($id)]);
    }

    // ________________________________________________________________________

    public function edit($id)
    {
        return view('computers.edit',[
            'computer' => Computer::findOrFail($id)
        ]);
    }

    // ________________________________________________________________________

    public function update(Request $request, $id)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => ['required','integer']
        ]);
        $toUpdate = Computer::findOrFail($id);


        $toUpdate-> name = strip_tags($request->input('computer-name')) ;
        $toUpdate-> origin = strip_tags($request->input('computer-origin')) ;
        $toUpdate-> price = strip_tags($request->input('computer-price'))  ;
        $toUpdate-> save();
        return redirect()->route('computers.show', $id);
    }


    // ________________________________________________________________________

    public function destroy($id)
    {
        $to_delete = Computer::findOrFail($id);
        $to_delete -> delete();
        return redirect()->route('computers.index');

    }
}
