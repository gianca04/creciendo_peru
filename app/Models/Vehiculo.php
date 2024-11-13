<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 * 
 * @property int $id
 * @property int|null $cobrador_id
 * @property string|null $marca
 * @property string|null $modelo
 * @property string|null $placa
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class Vehiculo extends Model
{
	protected $table = 'vehiculos';
	public $timestamps = false;

	protected $casts = [
		'cobrador_id' => 'int'
	];

	protected $fillable = [
		'cobrador_id',
		'marca',
		'modelo',
		'placa'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'cobrador_id');
	}
}
