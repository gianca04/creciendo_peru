<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CarteraCliente
 * 
 * @property int $cobrador_id
 * @property int $cliente_id
 * 
 * @property User $user
 * @property Cliente $cliente
 *
 * @package App\Models
 */
class CarteraCliente extends Model
{
	protected $table = 'cartera_clientes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cobrador_id' => 'int',
		'cliente_id' => 'int'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'cobrador_id');
	}

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}
}
