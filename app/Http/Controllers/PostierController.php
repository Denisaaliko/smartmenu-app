<?php

namespace App\Http\Controllers;

use App\Models\Porosi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostierController extends Controller
{
    public function index()
    {
        $porosi = DB::select("select p.PorosiID, p.Data, p.Adresa, p.CmimTotal, p.Status, p.Sasia, f.Emer, u.name from porosi p
            inner join fastfood f on p.fastfoodID = f.fastfoodID
            inner join users u on u.id= p.PerdoruesID
            order by p.Data desc");
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
        $porosi->save(); // update produkt where ProduktID=id set ...

        return redirect('/postier')->with('success', 'Statusi u perditesua.'); // -> resources/views/postier.blade.php
    }
}
