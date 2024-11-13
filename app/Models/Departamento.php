<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 * 
 * @property int $id
 * @property string $name
 * 
 * @property Collection|Distrito[] $distritos
 * @property Collection|Provincia[] $provincias
 *
 * @package App\Models
 */
class Departamento extends Model
{
	protected $table = 'departamentos';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function distritos()
	{
		return $this->hasMany(Distrito::class, 'department_id');
	}

	public function provincias()
	{
		return $this->hasMany(Provincia::class, 'department_id');
	}
}
