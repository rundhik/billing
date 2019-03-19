<?php

namespace TesBilling\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarif extends Model
{
    use SoftDeletes;
    protected $table = 'tarifs';
    protected $guarded = array();
    protected $casts = [
        'tarif' => 'array'
    ];

    public function layanan()
    {
        return $this->belongsTo('TesBilling\Models\Layanan', 'layanan_id');
    }
}
