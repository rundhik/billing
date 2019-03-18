<?php

namespace TesBilling\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periodes';

    public function penggunaan()
    {
        return $this->hasMany('TesBilling\Models\Penggunaan', 'periode_id', 'id');
    }
}
