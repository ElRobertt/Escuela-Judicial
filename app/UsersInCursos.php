<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersInCursos extends Model
{
    protected $fillable=['user_id', 'curso_id', 'completado'];
}
