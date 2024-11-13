<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentosIdentidad
 * 
 * @property int $id
 * @property int|null $cliente_id
 * @property string $tipo_documento
 * @property string $numero_documento
 * @property Carbon|null $fecha_emision
 * 
 * @property Cliente|null $cliente
 *
 * @package App\Models
 */
class DocumentosIdentidad extends Model
{
	protected $table = 'documentos_identidad';
	public $timestamps = false;

	protected $casts = [
		'cliente_id' => 'int',
		'fecha_emision' => 'datetime'
	];

	protected $fillable = [
		'cliente_id',
		'tipo_documento',
		'numero_documento',
		'fecha_emision'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}
}
