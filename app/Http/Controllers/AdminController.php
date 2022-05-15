<?php

namespace App\Http\Controllers;

use App\Models\Porosi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $porosi = DB::select("select p.PorosiID, p.Data, p.Adresa, p.CmimTotal, p.Status, p.Sasia, f.Emer, u.name from porosi p
            inner join fastfood f on p.fastfoodID = f.fastfoodID
            inner join users u on u.id= p.PerdoruesID
            order by p.Data desc");
        // select * from porosi
        return view('admin', compact('porosi')); // -> resources/views/admin.blade.php
    }

}
