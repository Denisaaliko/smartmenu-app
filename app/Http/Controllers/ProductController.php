<?php

namespace App\Http\Controllers;

use App\Models\Produkt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $produkt = Produkt::all(); // select * from produkt

        return view('produkt.index', compact('produkt')); // -> resources/views/produkt/index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('produkt.create'); // -> resources/views/produkt/create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'Emer'=>'required',
            'Çmim'=>'required',
            'Kalori'=>'required',
            'Imazh'=>'required',

        ]);

        $profileImage = null;
        if ($image = $request->file('Imazh')) {
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            Storage::disk('public')->put($profileImage, file_get_contents($image));
        }

        // Getting values from the blade template form
        $produkt = new Produkt([
           'Emer' =>  $request->get('Emer'),
           'Çmim' => $request->get('Çmim'),
           'Kalori' => $request->get('Kalori'),
           'Imazh'=> $profileImage,
        ]);
        $produkt->save();// insert into produkt values (...)

        DB::insert("INSERT into menudetaje values(1, $produkt->ProduktID)");
        return redirect('/produkt')->with('success', 'Produkti u ruajt.');   // -> resources/views/produkt/index.blade.php
    }

    /**
     * Display the specified resource. We don't need this one for this tutorial.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $produkt = Produkt::where("ProduktID", $id)->first(); // select * from produkt where ProduktId=id limit 1
        return view('produkt.edit', compact('produkt'));  // -> resources/views/produkt/edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'Emer'=>'required',
            'Çmim'=>'required',
            'Kalori'=>'required',
            'Imazh'=>'required',

        ]);

        $profileImage = null;
        if ($image = $request->file('Imazh')) {
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            Storage::disk('public')->put($profileImage, file_get_contents($image));
        }

        $produkt = Produkt::where("ProduktID", $id)->first();
        // Getting values from the blade template form
        $produkt->Emer =  $request->get('Emer');
        $produkt->Çmim = $request->get('Çmim');
        $produkt->Kalori = $request->get('Kalori');
        $produkt->Imazh = $profileImage;
        $produkt->save(); // update produkt where ProduktID=id set ...

        return redirect('/produkt')->with('success', 'Produkti u perditesua.'); // -> resources/views/produkt/index.blade.php
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $produkt = Produkt::find($id);
        $produkt->delete(); // delete from produkt where ProduktId=id

        return redirect('/produkt')->with('success', 'Produkti u fshi.');  // -> resources/views/produkt/index.blade.php
    }
}
