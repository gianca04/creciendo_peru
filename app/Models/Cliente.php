<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table = 'clientes';
	protected $primaryKey = 'id';
	protected $casts = [
		'fecha_creacion' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'telefono',
		'direccion',
		'documento_identidad',
		'fecha_creacion',
		'estado'
	];
	public $timestamps = false;

	public function cartera_clientes()
	{
		return $this->hasMany(CarteraCliente::class);
	}

	public function documentos_identidads()
	{
		return $this->hasMany(DocumentosIdentidad::class);
	}

	public function historial_cobros()
	{
		return $this->hasMany(HistorialCobro::class);
	}

	public function incidentes()
	{
		return $this->hasMany(Incidente::class);
	}

	public function interacciones_clientes()
	{
		return $this->hasMany(InteraccionesCliente::class);
	}

	public function pagos_clientes()
	{
		return $this->hasMany(PagosCliente::class);
	}

	public function prestamos()
	{
		return $this->hasMany(Prestamo::class);
	}

	public function reputacion_crediticia()
	{
		return $this->hasMany(ReputacionCrediticium::class);
	}

	public function ubicaciones()
	{
		return $this->hasMany(Ubicacione::class);
	}
}
