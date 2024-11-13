<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ubicacione
 * 
 * @property int $id
 * @property int $cliente_id
 * @property string $direccion
 * @property int $id_distrito
 * 
 * @property Cliente $cliente
 * @property Distrito $distrito
 *
 * @package App\Models
 */
class Ubicacione extends Model
{
	protected $table = 'ubicaciones';
	public $timestamps = false;

	protected $casts = [
		'cliente_id' => 'int',
		'id_distrito' => 'int'
	];

	protected $fillable = [
		'cliente_id',
		'direccion',
		'id_distrito'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}

	public function distrito()
	{
		return $this->belongsTo(Distrito::class, 'id_distrito');
	}
}
