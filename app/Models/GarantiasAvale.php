<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GarantiasAvale
 * 
 * @property int $id
 * @property int|null $prestamo_id
 * @property string $tipo_garantia
 * @property string|null $descripcion
 * @property float|null $valor
 * 
 * @property Prestamo|null $prestamo
 *
 * @package App\Models
 */
class GarantiasAvale extends Model
{
	protected $table = 'garantias_avales';
	public $timestamps = false;

	protected $casts = [
		'prestamo_id' => 'int',
		'valor' => 'float'
	];

	protected $fillable = [
		'prestamo_id',
		'tipo_garantia',
		'descripcion',
		'valor'
	];

	public function prestamo()
	{
		return $this->belongsTo(Prestamo::class);
	}
}
