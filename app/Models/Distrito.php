<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Distrito
 * 
 * @property int $id
 * @property string $name
 * @property int|null $province_id
 * @property int|null $department_id
 * 
 * @property Provincia|null $provincia
 * @property Departamento|null $departamento
 * @property Collection|Ruta[] $rutas
 * @property Collection|Ubicacione[] $ubicaciones
 *
 * @package App\Models
 */
class Distrito extends Model
{
	protected $table = 'distritos';
	public $timestamps = false;

	protected $casts = [
		'province_id' => 'int',
		'department_id' => 'int'
	];

	protected $fillable = [
		'name',
		'province_id',
		'department_id'
	];

	public function provincia()
	{
		return $this->belongsTo(Provincia::class, 'province_id');
	}

	public function departamento()
	{
		return $this->belongsTo(Departamento::class, 'department_id');
	}

	public function rutas()
	{
		return $this->hasMany(Ruta::class, 'id_distrito');
	}

	public function ubicaciones()
	{
		return $this->hasMany(Ubicacione::class, 'id_distrito');
	}
}
