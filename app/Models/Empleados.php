<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
	protected $table = 'empleados';

	protected $fillable = [
        'id_user',
		'nombre',
        'apellido',
        'dni',
        'telefono',
    	'genero',	
        'foto',
        'foto_dni'
	];

	public $timestamps = false;

	public function users()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}