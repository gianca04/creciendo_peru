<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ruta
 * 
 * @property int $id
 * @property int $nombre_ruta
 * @property int $id_distrito
 * 
 * @property Distrito $distrito
 *
 * @package App\Models
 */
class Ruta extends Model
{
	protected $table = 'rutas';
	public $timestamps = false;

	protected $casts = [
		'nombre_ruta' => 'int',
		'id_distrito' => 'int'
	];

	protected $fillable = [
		'nombre_ruta',
		'id_distrito'
	];

	public function distrito()
	{
		return $this->belongsTo(Distrito::class, 'id_distrito');
	}
}
