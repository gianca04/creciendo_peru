<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ObservacionesReputacion
 * 
 * @property int $id
 * @property int|null $reputacion_crediticia_id
 * @property string $tipo_observacion
 * @property string|null $descripcion
 * @property Carbon|null $fecha_observacion
 * 
 * @property ReputacionCrediticium|null $reputacion_crediticium
 *
 * @package App\Models
 */
class ObservacionesReputacion extends Model
{
	protected $table = 'observaciones_reputacion';
	public $timestamps = false;

	protected $casts = [
		'reputacion_crediticia_id' => 'int',
		'fecha_observacion' => 'datetime'
	];

	protected $fillable = [
		'reputacion_crediticia_id',
		'tipo_observacion',
		'descripcion',
		'fecha_observacion'
	];

	public function reputacion_crediticium()
	{
		return $this->belongsTo(ReputacionCrediticium::class, 'reputacion_crediticia_id');
	}
}
