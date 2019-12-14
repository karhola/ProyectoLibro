<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public function libro()
    {
        return $this->hasMany('App\Libro', 'autor_id');
    }
}
