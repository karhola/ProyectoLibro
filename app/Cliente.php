<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function orden()
    {
        return $this->hasMany('App\Orden', 'cliente_id');
    }
}
