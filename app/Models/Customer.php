<?php

namespace TesBilling\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $table = 'customers';
    protected $fillable = [
        'nm_customer', 'alamat', 'telp'
    ];

    public function penggunaan()
    {
        return $this->hasMany('TesBilling\Models\Penggunaan', 'customer_id', 'id');
    }

    public function tagihan()
    {
        return $this->hasManyThrough(
            'TesBilling\Models\Tagihan', 
            'TesBilling\Models\Penggunaan',
            'customer_id',
            'penggunaan_id',
            'id',
            'id'
        );
    }
}
