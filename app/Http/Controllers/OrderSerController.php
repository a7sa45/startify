<?php

namespace App\Http\Controllers;

use App\Models\Order_ser;
use Illuminate\Http\Request;

class OrderSerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_ser = Order_ser::all();
        return view('order_ser.index', compact('order_ser'));
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
        $Order = new Order_ser();
        $Order->service_id = $request->service_id;
        $Order->user_id = auth()->user()->id;
        $Order->save();

        return redirect('/all')->with('success', 'تم الطلب بنجاح!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order_ser $order_ser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order_ser $order_ser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order_ser $order_ser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order_ser $order_ser)
    {
        //
    }
}
