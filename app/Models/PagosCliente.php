<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PagosCliente
 * 
 * @property int $id
 * @property int|null $cliente_id
 * @property float|null $monto
 * @property string|null $estado
 * @property Carbon|null $fecha_pago
 * @property string|null $metodo_pago
 * @property string|null $comentarios
 * 
 * @property Cliente|null $cliente
 *
 * @package App\Models
 */
class PagosCliente extends Model
{
	protected $table = 'pagos_clientes';
	public $timestamps = false;

	protected $casts = [
		'cliente_id' => 'int',
		'monto' => 'float',
		'fecha_pago' => 'datetime'
	];

	protected $fillable = [
		'cliente_id',
		'monto',
		'estado',
		'fecha_pago',
		'metodo_pago',
		'comentarios'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}
}
