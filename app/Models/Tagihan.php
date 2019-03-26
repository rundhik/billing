<?php

namespace TesBilling\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagihan extends Model
{
    use SoftDeletes;
    protected $table = 'tagihans';
    protected $guarded = array();
    protected $casts = [
        'tagihan' => 'array', 
        'tarif' => 'array'
    ];
    protected $fillable = [
        'penggunaan_id', 'tagihan_kode', 'tagihan', 'tarif'
    ];

    public function penggunaan()
    {
        return $this->belongsTo('TesBilling\Models\Penggunaan', 'penggunaan_id');
    }
    public function meterawal()
    {
        return $this->belongsTo('TesBilling\Models\Penggunaan', 'meter');
    }
    public function meterakhir()
    {
        return $this->belongsTo('TesBilling\Models\Penggunaan', 'meter');
    }
}
