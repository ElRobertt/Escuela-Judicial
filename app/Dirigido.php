<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dirigido extends Model
{
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'dirigido_id');
    }
}
