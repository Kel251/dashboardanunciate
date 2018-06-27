<?php

namespace Anunciate;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Anuncio extends Authenticatable
{
    use Notifiable;

    protected $table = 'det_anuncios';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable. prueba para github
     *
     * @var array
     */
    protected $fillable = [
        'Anuncio', 'Descripcion', 'telefono', 'email', 'precio', 'Id_anun',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
