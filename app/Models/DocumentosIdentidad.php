<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class DocumentosIdentidad extends Model
{
	protected $table = 'documentos_identidad';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'cliente_id' => 'int',
		'fecha_emision' => 'datetime'
	];

	protected $fillable = [
		'cliente_id',
		'tipo_documento',
		'numero_documento',
		'fecha_emision',
		'foto_documento'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}
}
