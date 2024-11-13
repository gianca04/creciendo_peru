<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nombre
 * @property string $telefono
 * @property string|null $direccion
 * @property string $documento_identidad
 * @property Carbon $fecha_creacion
 * @property string|null $estado
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|CarteraCliente[] $cartera_clientes
 * @property Collection|DocumentosIdentidad[] $documentos_identidads
 * @property Collection|HistorialCobro[] $historial_cobros
 * @property Collection|Incidente[] $incidentes
 * @property Collection|InteraccionesCliente[] $interacciones_clientes
 * @property Collection|PagosCliente[] $pagos_clientes
 * @property Collection|Prestamo[] $prestamos
 * @property Collection|ReputacionCrediticium[] $reputacion_crediticia
 * @property Collection|Ubicacione[] $ubicaciones
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';

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
