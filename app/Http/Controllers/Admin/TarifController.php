<?php

namespace TesBilling\Http\Controllers\Admin;

use Illuminate\Http\Request;
use TesBilling\Http\Controllers\Controller;
use TesBilling\Models\Tarif;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t = new Tarif;
        $a = $t->find(1);
        $l = $t->find(2);
        $ta = $t->where('layanan_id', 1)->get();
        $tl = $t->where('layanan_id', 2)->get();
        $counta = count($a->tarif);
        $countl = count($l->tarif);
        return view('tarif.index', compact('t', 'ta', 'tl', 'counta', 'countl','l','a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $t = new Tarif;
        $t = $t->find($id);
        $count = count($t->tarif);
        $tar = $t->where('layanan_id', $id)->get();
        return view('tarif.edit', compact('t', 'tar', 'count'));
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
        $t = Tarif::find($id);
        $x = [];
        $x = $request->tarif;
        for ($i=0; $i < count($request->tarif); $i++) { 
            for ($j=0; $j < count($request->tarif[$i]); $j++) { 
                if ($i < (count($request->tarif)) && $i > 0 && $j == 0) {
                    $x[$i][$j] = $request->tarif[$i-1][$j+1];
                }
            }
        }
        $t->update(['tarif' => $x]);
        return redirect()->route('fare.index')->with('success', 'Tarif berhasil diupdate');
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
