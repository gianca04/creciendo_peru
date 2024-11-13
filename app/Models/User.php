<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
	protected $table = 'users';
	protected $primaryKey = 'id';
	use Notifiable;
	protected $fillable = [
		'role_id',
		'name',
		'email',
		'password',
	];
	protected $hidden = [
		'password',
		'remember_token',
	];
	protected $casts = [
		'role_id' => 'int',
		'email_verified_at' => 'datetime',
		'password' => 'hashed'
	];
	protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function getRolNameAttribute()
	{
		$roles = [
			1 => 'Gerente',
			2 => 'Administrador',
			3 => 'Cobrador'
		];

		return $roles[$this->role_id] ?? 'Desconocido';
	}

	public function cartera_clientes()
	{
		return $this->hasMany(CarteraCliente::class, 'cobrador_id');
	}

	public function historial_cobros()
	{
		return $this->hasMany(HistorialCobro::class, 'cobrador_id');
	}

	public function vehiculos()
	{
		return $this->hasMany(Vehiculo::class, 'cobrador_id');
	}
}
