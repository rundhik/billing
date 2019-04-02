<?php

namespace TesBilling\Http\Controllers\Admin;

use Illuminate\Http\Request;
use TesBilling\Http\Controllers\Controller;
use TesBilling\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c = Customer::get();
        return view('customer.index', compact('c'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = new Customer;
        $c->nm_customer = $request->nm_customer;
        $c->alamat = $request->alamat;
        $c->telp = $request->telp;
        $c->save();
        return redirect()->route('cust.index')->with('success', 'Data Customer berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $c = Customer::findOrFail($id);
        return view('customer.show', compact('c'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = Customer::find($id);
        return view('customer.edit', compact('c'));
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
        $c = Customer::find($id)->update($request->all());
        return redirect()->route('cust.index')->with('success', 'Data Customer berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = Customer::findOrFail($id);
        $c->delete();
        return redirect()->route('cust.index');
    }
}
