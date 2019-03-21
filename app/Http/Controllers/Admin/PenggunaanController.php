<?php

namespace TesBilling\Http\Controllers\Admin;

use Illuminate\Http\Request;
use TesBilling\Http\Controllers\Controller;
use TesBilling\Models\Penggunaan;
use TesBilling\Models\Customer;
use TesBilling\Models\Layanan;
use TesBilling\Models\Periode;

class PenggunaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pe = new Penggunaan;
        $p = Penggunaan::get()->all();
        $c = Customer::get()->all();
        $l = Layanan::get()->all();
        return view('penggunaan.index', compact('p', 'pe','c','l'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $customer)
    {   
        $c = Customer::find($customer->pelanggan);
        $l = Layanan::find($customer->layanan);
        $p = Penggunaan::where([ 
            ['customer_id', '=', $customer->pelanggan], 
            ['layanan_id', '=', $customer->layanan] ])
            ->latest()->first();
        if ($p == NULL) {
            $pr = Periode::find(1);
        } else {
            $pr = Periode::find($p->periode_id+1);
        }
        return view('penggunaan.create', compact('c', 'l', 'p', 'pr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Penggunaan;
        $p->customer_id = $request->customer_id;
        $p->layanan_id = $request->layanan_id;
        $p->periode_id = $request->periode_id;
        $p->meter = $request->meter;
        // var_dump($p) or die();
        $p->save();
        return redirect()->route('usage.index')->with('success', 'Sukses');
    }

    /**
     * Display the specified resource.
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
