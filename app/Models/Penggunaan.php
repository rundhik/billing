<?php

namespace TesBilling\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penggunaan extends Model
{
    use SoftDeletes;
    protected $table = 'penggunaans';
    protected $fillable = [
        'meter',
        'customer_id',
        'layanan_id',
        'periode_id'
    ];

    public function customer()
    {
        return $this->belongsTo('TesBilling\Models\Customer', 'customer_id');
    }
    public function layanan()
    {
        return $this->belongsTo('TesBilling\Models\Layanan', 'layanan_id');
    }
    public function periode()
    {
        return $this->belongsTo('TesBilling\Models\Periode', 'periode_id');
    }
    public function tagihan()
    {
        return $this->hasOne('TesBilling\Models\Tagihan', 'tagihan_id', 'id');
    }
    public function meterawal()
    {
        return $this->hasMany('TesBilling\Models\Tagihan', 'meter_awal', 'meter');
    }
    public function meterakhir()
    {
        return $this->hasMany('TesBilling\Models\Tagihan', 'meter_akhir', 'meter');
    }
}
