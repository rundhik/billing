<?php

namespace TesBilling\Http\Controllers\Admin;

use Illuminate\Http\Request;
use TesBilling\Http\Controllers\Controller;
use TesBilling\Models\Tagihan;
use TesBilling\Models\Layanan;
use TesBilling\Models\Penggunaan;
use TesBilling\Models\Tarif;

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
    public function generate($u,$l)
    {
        $usage = $u;
        $tar = Tarif::find(1)->pluck('tarif')->first();
        $tmp = 0;

        if ($usage <= 10) {
            $tag = $tar[0] * 10;
        } else {
            for ($i=0; $i < count($tar); $i++) { 
                if ( $usage > 10 && $i==0 ) {
                    $tag = $tar[$i] * 10;
                    $tmp = $tag + $tmp;
                    $usage = $usage - 10;
                } elseif ( $usage >= 10 && $i==1 ) {
                    $tag = $tar[$i] * 10;
                    $tmp = $tag + $tmp;
                    $usage = $usage - 10;
                } elseif ( $usage >= 10 && $i==2 ) {
                    $tag = $tar[$i] * 10;
                    $tmp = $tag + $tmp;
                    $usage = $usage - 10;
                } elseif ( $usage >= 10 && $i==3 ) {
                    $tag = $tar[$i] * $usage;
                    $tmp = $tag + $tmp;
                    $tag = $tmp;
                    break;
                } else {
                    $tag = $tar[$i] * $usage;
                    $tmp = $tag + $tmp;
                    $tag = $tmp;
                    break;
                }
            }
        }
        var_dump($tag) or die();
        return ($tag);
    }
    public function create($c, $l, $p, $m)
    {
        $c = (int)$c; $l = (int)$l; $p = (int)$p; $m = (int)$m;
        $ub = Penggunaan::where([ 
            ['customer_id', '=' , $c], 
            ['layanan_id', '=', $l], 
            ['periode_id', '=', $p-1]
            ])->first();
        $un = Penggunaan::where([ 
            ['customer_id', '=' , $c], 
            ['layanan_id', '=', $l], 
            ['periode_id', '=', $p]
            ])->first();
        if ($ub == null) {
            $ub = 0;
            $u = $un->meter - $ub;
        } else {
            $u = $un->meter - $ub->meter;
        }
        $lay = $un->layanan->nm_layanan;
        $cust = $un->customer->nm_customer;
        $per = $un->periode->deskripsi;
        return view('tagihan.create', compact(
            'lay', 'cust', 'per', 
            'u', 'c', 'l', 'p',
             'm', 'un', 'ub'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $t = new Tagihan;
        $t->penggunaan_id = $request->penggunaan_id;
        if ($request->meter_awal ==  0) {
            $t->meter_awal = null;
        } else {
            $t->meter_awal = $request->meter_awal;
        }
        $t->meter_akhir = $request->meter_akhir;
        $t->meter_digunakan = $request->meter_digunakan;
        $t->tagihan_kode = "c".$request->customer_id.$request->layanan_id.$request->periode_id;
        $t->tagihan = $this->generate($request->meter_digunakan,$request->layanan_id);
        $t->save();
        return redirect()->route('bill.index');
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
