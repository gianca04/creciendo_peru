<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Provincia
 * 
 * @property int $id
 * @property string $name
 * @property int|null $department_id
 * 
 * @property Departamento|null $departamento
 * @property Collection|Distrito[] $distritos
 *
 * @package App\Models
 */
class Provincia extends Model
{
	protected $table = 'provincias';
	public $timestamps = false;

	protected $casts = [
		'department_id' => 'int'
	];

	protected $fillable = [
		'name',
		'department_id'
	];

	public function departamento()
	{
		return $this->belongsTo(Departamento::class, 'department_id');
	}

	public function distritos()
	{
		return $this->hasMany(Distrito::class, 'province_id');
	}
}
