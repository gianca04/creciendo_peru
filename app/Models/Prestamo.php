<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
	protected $table = 'prestamos';
	protected $primaryKey = 'id';
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
	public $timestamps = false;
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
