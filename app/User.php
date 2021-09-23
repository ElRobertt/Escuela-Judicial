<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','edad','numero','cargo','institucion','imagen_perfil','acta_nac','cedula','credencial','carta_expo','fotografia','curp',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

        /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//     public function role (){
//         return $this->belongsTo(Role::class);
//     }

   public function hasRoles($roles)
   {
       if ( $this->role_id===$roles)
        {
           return true;
        }

        return false;

   }

   public function cursoUser()
   {
       return $this->belongsToMany(Curso::class, 'users_in_cursos') ->withPivot('completado', 'id');
   }


}
