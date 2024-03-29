<?php

namespace App\Http\Controllers;

use App\Models\Porosi;
use App\Models\Produkt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PorosiController extends Controller
{
    public function index()
    {
        $produkt = DB::select("SELECT ff.fastfoodID,ff.Emer as fEmer, ff.Vendndodhje, p.ProduktID,p.Emer, p.Çmim, p.Kalori, p.Imazh FROM smartmenu.menu as menu
            inner join smartmenu.menudetaje as md
            on menu.MenuID = md.MenuID
            inner join smartmenu.fastfood as ff
            on ff.fastfoodID = menu.fastfoodID
            inner join smartmenu.produkt as p
            on p.ProduktID = md.ProduktID;");

        // select * from porosi

        return view('klient', compact('produkt')); // -> resources/views/klient.blade.php
    }

    public function klientPorosi()
    {
        $porosi = DB::select("select p.PorosiID, p.PerdoruesID, p.Data, p.Adresa, p.CmimTotal, p.Status, p.Sasia, f.Emer, u.name from porosi p
            inner join fastfood f on p.fastfoodID = f.fastfoodID
            inner join users u on u.id= p.PerdoruesID
            where p.PerdoruesID=" . auth()->id() . " order by p.Data desc;");
        // select * from porosi

        return view('klient-porosi', compact('porosi')); // -> resources/views/postier.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    /* public function create()
     {
         return view('porosi.create'); // -> resources/views/porosi/create.blade.php
     }*/
    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        // Getting values from the blade template form
        $porosi = new Porosi([
            'PerdoruesID' => $request->get('user'),
            'fastfoodID' => $request->get('fastfood'),
            'Adresa' => $request->get('address'),
            'Sasia' => $request->get('sasi'),
            'Data' => now(),
            'Status' => "U mor",
            'CmimTotal' => $request->get('cmim') * $request->get('sasi'),
        ]);
        $porosi->save(); // insert into produkt values (...)
        return redirect('/klient')->with('success', 'Porosia u ruajt.');   // -> resources/views/produkt/index.blade.php
    }
}
