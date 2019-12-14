<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public function autor()
    {
        return $this->belongsTo('App\Autor');
    }
    public function ordendetalle()
    {
        return $this->hasMany('App\OrdenDetalle', 'libro_id');
    }
}
