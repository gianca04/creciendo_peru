<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 * 
 * @property int $id
 * @property int|null $cliente_id
 * @property float $monto
 * @property float $tasa_interes
 * @property int $plazo
 * @property Carbon|null $fecha_desembolso
 * @property Carbon|null $fecha_vencimiento
 * @property string|null $estado
 * @property string $tipo_prestamo
 * @property Carbon|null $fecha_aprobacion
 * @property string|null $comentarios
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Cliente|null $cliente
 * @property Collection|Cuota[] $cuotas
 * @property Collection|DocumentosPrestamo[] $documentos_prestamos
 * @property Collection|GarantiasAvale[] $garantias_avales
 *
 * @package App\Models
 */
class Prestamo extends Model
{
	protected $table = 'prestamos';

	protected $casts = [
		'cliente_id' => 'int',
		'monto' => 'float',
		'tasa_interes' => 'float',
		'plazo' => 'int',
		'fecha_desembolso' => 'datetime',
		'fecha_vencimiento' => 'datetime',
		'fecha_aprobacion' => 'datetime'
	];

	protected $fillable = [
		'cliente_id',
		'monto',
		'tasa_interes',
		'plazo',
		'fecha_desembolso',
		'fecha_vencimiento',
		'estado',
		'tipo_prestamo',
		'fecha_aprobacion',
		'comentarios'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}

	public function cuotas()
	{
		return $this->hasMany(Cuota::class);
	}

	public function documentos_prestamos()
	{
		return $this->hasMany(DocumentosPrestamo::class);
	}

	public function garantias_avales()
	{
		return $this->hasMany(GarantiasAvale::class);
	}
}
