<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialCobro
 * 
 * @property int $id
 * @property int|null $cobrador_id
 * @property int|null $cliente_id
 * @property Carbon|null $fecha_visita
 * @property float|null $monto
 * @property string|null $estado
 * @property string|null $comentarios
 * 
 * @property User|null $user
 * @property Cliente|null $cliente
 *
 * @package App\Models
 */
class HistorialCobro extends Model
{
	protected $table = 'historial_cobros';
	public $timestamps = false;

	protected $casts = [
		'cobrador_id' => 'int',
		'cliente_id' => 'int',
		'fecha_visita' => 'datetime',
		'monto' => 'float'
	];

	protected $fillable = [
		'cobrador_id',
		'cliente_id',
		'fecha_visita',
		'monto',
		'estado',
		'comentarios'
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
