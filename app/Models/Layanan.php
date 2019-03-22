<?php

namespace TesBilling\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanans';

    public function tarif()
    {
        return $this->hasOne('TesBilling\Models\Tarif', 'layanan_id', 'id');
    }

    public function penggunaan()
    {
        return $this->hasMany('TesBilling\Models\Penggunaan', 'layanan_id', 'id');
    }

    public function tagihan()
    {
        return $this->hasManyThrough(
            'TesBilling\Models\Tagihan', 
            'TesBilling\Models\Penggunaan',
            'layanan_id',
            'penggunaan_id',
            'id',
            'id'
        );
    }
}
