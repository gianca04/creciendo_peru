<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentosPrestamo
 * 
 * @property int $id
 * @property int|null $prestamo_id
 * @property string $tipo_documento
 * @property string $documento
 * @property Carbon|null $fecha_emision
 * 
 * @property Prestamo|null $prestamo
 *
 * @package App\Models
 */
class DocumentosPrestamo extends Model
{
	protected $table = 'documentos_prestamos';
	public $timestamps = false;

	protected $casts = [
		'prestamo_id' => 'int',
		'fecha_emision' => 'datetime'
	];

	protected $fillable = [
		'prestamo_id',
		'tipo_documento',
		'documento',
		'fecha_emision'
	];

	public function prestamo()
	{
		return $this->belongsTo(Prestamo::class);
	}
}
