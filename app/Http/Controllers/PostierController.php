<?php

namespace App\Http\Controllers;

use App\Models\Porosi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostierController extends Controller
{
    public function index()
    {
        $porosi = Porosi::all();
        // select * from porosi

        return view('postier', compact('porosi')); // -> resources/views/postier.blade.php
    }
    public function update(Request $request, $id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'statusi'=>'required',
        ]);
        $porosi = Porosi::where("PorosiID", $id)->first();
        // Getting values from the blade template form
        $porosi->Status =  $request->get('statusi');
        $porosi->save();

        return redirect('/postier')->with('success', 'Statusi u perditesua.'); // -> resources/views/postier.blade.php
    }
}
