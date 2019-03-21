<?php

namespace TesBilling\Http\Controllers\Admin;

use Illuminate\Http\Request;
use TesBilling\Http\Controllers\Controller;
use TesBilling\Models\Tagihan;
use TesBilling\Models\Layanan;
use TesBilling\Models\Penggunaan;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t = new Tagihan;
        $lay = new Layanan;
        $p = new Penggunaan;
        $a = $lay->find(1)->tagihan->all();
        $l = $lay->find(2)->tagihan->all();
        // $a = $t->find(1);
        // $l = $t->find(2);
        // $ta = $t->where('layanan_id', 1)->get();
        // $tl = $t->where('layanan_id', 2)->get();
        return view('tagihan.index', compact('a','l','p','t'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate($id)
    {
        return ('Hello');
    }
    public function create()
    {
        // $u = new Penggunaan;
        $cust = 1;
        $lay = 1;
        $per = 1;
        $u->where([ 
            ['customer_id', '=' , 1], 
            ['layanan_id', '=', 1], 
            ['periode_id', '=', 2]
            ])->first()->layanan->nm_layanan;
        $t->find(1)->penggunaan->id;
        $t->find(1)->penggunaan->layanan->nm_layanan;
        $t->find(1)->penggunaan->customer->nm_customer;
        $t->find(1)->penggunaan->periode->deskripsi;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
