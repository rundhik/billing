<?php

namespace TesBilling\Http\Controllers;

use Illuminate\Http\Request;
use TesBilling\Models\Penggunaan;
use TesBilling\Models\Tarif;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $p = new Penggunaan;
        $t = new Tarif;
        $p1c1012014 = $p->where([ ['customer_id', '=', 1], ['periode_id', '=', 1],['layanan_id', '=', 1] ])->first();
        $p1c1022014 = $p->where([ ['customer_id', '=', 1], ['periode_id', '=', 2],['layanan_id', '=', 1] ])->first();
        $usage = $p1c1022014->meter - $p1c1012014->meter;
        $guna = $usage;
        $tar = $t->find(1)->pluck('tarif')->first();
        $tmp = 0;

        if ($usage <= 10) {
            $tag = $tar[0] * 10;
            // $tmp = $tag + $tmp;
        } else {
            for ($i=0; $i<=3; $i++) { 
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
        


        echo $p1c1022014->meter, " ";
        echo $p1c1012014->meter, " ";
        echo $guna, " ";
        echo $tar[0], " ";
        echo $tar[1], " ";
        echo $tar[2], " ";
        echo $tar[3], " ";
        echo $tag, " ";
        
        return view('home');
    }
}
