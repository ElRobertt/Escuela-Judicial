<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $table = 'cursos';

    protected $guarded = [];

    public function dirigido()
    {
       return $this->belongsTo(Dirigido::class, 'dirigido_id');
    }
}
