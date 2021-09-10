<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Dirigido;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    public function showRegistrationForm()
    {
        return view('auth.register',[
            'dirigidos'=> Dirigido::pluck('name', 'id')
        ]);

    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id'=> ['required'],
            'edad'=> ['required'],
            'numero'=> ['required'],
            'cargo'=> ['required'],
            'institucion'=> ['required'],
            'imagen_perfil'=> ['required'],
            'acta_nac'=> ['required'],
            'cedula'=> ['required'],
            'credencial'=> ['required'],
            'carta_expo'=> ['required'],
            'fotografia'=> ['required'],
            'curp'=> ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id'=> $data['role_id'],
            'edad'=> $data['edad'],
            'numero'=> $data['numero'],
            'cargo'=> $data['cargo'],
            'institucion'=> $data['institucion'],
            'imagen_perfil'=> $data["imagen_perfil"]->store('imagenes'),
            'acta_nac'=> $data["acta_nac"]->store('actas'),
            'cedula'=> $data["cedula"]->store('cedulas'),
            'credencial'=> $data["credencial"]->store('credenciales'),
            'carta_expo'=> $data["carta_expo"]->store('cartas'),
            'fotografia'=> $data["fotografia"]->store('fotografias'),
            'curp'=> $data["curp"]->store('curps'),

        ]);
    }
}
