<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReputacionCrediticium
 * 
 * @property int $id
 * @property int|null $cliente_id
 * @property int|null $puntaje
 * @property Carbon $ultima_actualizacion
 * 
 * @property Cliente|null $cliente
 * @property Collection|ObservacionesReputacion[] $observaciones_reputacions
 *
 * @package App\Models
 */
class ReputacionCrediticium extends Model
{
	protected $table = 'reputacion_crediticia';
	public $timestamps = false;

	protected $casts = [
		'cliente_id' => 'int',
		'puntaje' => 'int',
		'ultima_actualizacion' => 'datetime'
	];

	protected $fillable = [
		'cliente_id',
		'puntaje',
		'ultima_actualizacion'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}

	public function observaciones_reputacions()
	{
		return $this->hasMany(ObservacionesReputacion::class, 'reputacion_crediticia_id');
	}
}
