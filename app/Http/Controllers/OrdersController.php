<?php

namespace App\Http\Controllers;

use App\Models\Porosi;
use Illuminate\Http\Request;
class OrdersController extends Controller
{

    public function checkout(Request $request)
    {
        $porosi = new Porosi();
        $porosi->PerdoruesID = $request->PerdoruesID;
        $porosi->shippingAddress = $this->createAddress();
        return view('porosi/checkout', array(
            'porosi' => $porosi,
        ));
    }
    public function create(Request $request)
    {
        $token = $request->input('token');
        $input = $request->all();

        $porosi = new Porosi();
        $porosi->PerdoruesID = $request->PerdoruesID;
        $porosi->shippingAddress = $this->getShippingAddress($input);

        $transaction = $porosi->checkout($token);
        $porosiId = $transaction->porosi->id;
        return redirect("/porosi/${porosiId}");

    }
    public function index(Request $request)
    {
        $customer = $request->user()->toCustomer();
        $porosi = Porosi::findAllByCustomer($customer);
        return view('porosi/index', array(
            'porosi' => $porosi,
        ));
    }
    public function show($id)
    {
        $porosi = Porosi::findById($id);
        return view('porosi/show', array(
            'porosi' => $porosi,
        ));
    }

}
