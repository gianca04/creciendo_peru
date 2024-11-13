<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Incidente
 * 
 * @property int $id
 * @property int|null $cliente_id
 * @property string $tipo_incidente
 * @property string|null $descripcion
 * @property Carbon|null $fecha_incidente
 * 
 * @property Cliente|null $cliente
 *
 * @package App\Models
 */
class Incidente extends Model
{
	protected $table = 'incidentes';
	public $timestamps = false;

	protected $casts = [
		'cliente_id' => 'int',
		'fecha_incidente' => 'datetime'
	];

	protected $fillable = [
		'cliente_id',
		'tipo_incidente',
		'descripcion',
		'fecha_incidente'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}
}
