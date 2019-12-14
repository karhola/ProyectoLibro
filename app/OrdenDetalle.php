<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenDetalle extends Model
{
    public function orden()
    {
        return $this->belongsTo('App\Orden');
    }
    public function libro()
    {
        return $this->belongsTo('App\Libro');
    }
}
