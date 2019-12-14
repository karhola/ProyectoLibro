<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
    public function OrdenDetalle()
    {
        return $this->hasMany('App\OrdenDetalle', 'orden_id');
    }
}
