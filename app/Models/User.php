<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property int|null $role_id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Role|null $role
 * @property Collection|CarteraCliente[] $cartera_clientes
 * @property Collection|HistorialCobro[] $historial_cobros
 * @property Collection|Vehiculo[] $vehiculos
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'role_id' => 'int',
		'email_verified_at' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'role_id',
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
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
