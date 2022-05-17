<?php

namespace App\Http\Controllers;

use App\Models\Produkt;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function showProdukt(Request $request)
    {
        $produkt = Produkt::all();
        if ($request->keyword != '') {
            $produkt = Produkt::where('Emer', 'LIKE', '%' . $request->keyword . '%')->get();
        }
        return response()->json([
            'produkt' => $produkt
        ]);
    }
}
