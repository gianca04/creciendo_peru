<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InteraccionesCliente
 * 
 * @property int $id
 * @property int|null $cliente_id
 * @property string $tipo_interaccion
 * @property Carbon|null $fecha_interaccion
 * @property string|null $detalles
 * 
 * @property Cliente|null $cliente
 *
 * @package App\Models
 */
class InteraccionesCliente extends Model
{
	protected $table = 'interacciones_clientes';
	public $timestamps = false;

	protected $casts = [
		'cliente_id' => 'int',
		'fecha_interaccion' => 'datetime'
	];

	protected $fillable = [
		'cliente_id',
		'tipo_interaccion',
		'fecha_interaccion',
		'detalles'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}
}
