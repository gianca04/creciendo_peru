<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cuota
 * 
 * @property int $id
 * @property int|null $prestamo_id
 * @property float $monto
 * @property Carbon $fecha_vencimiento
 * @property string|null $estado
 * @property string|null $metodo_pago
 * 
 * @property Prestamo|null $prestamo
 *
 * @package App\Models
 */
class Cuota extends Model
{
	protected $table = 'cuotas';
	public $timestamps = false;

	protected $casts = [
		'prestamo_id' => 'int',
		'monto' => 'float',
		'fecha_vencimiento' => 'datetime'
	];

	protected $fillable = [
		'prestamo_id',
		'monto',
		'fecha_vencimiento',
		'estado',
		'metodo_pago'
	];

	public function prestamo()
	{
		return $this->belongsTo(Prestamo::class);
	}
}
