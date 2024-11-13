<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'roles';

	protected $fillable = [
		'nombre'
	];

	public $timestamps = false;

	public function users()
	{
		return $this->belongsTo(User::class);
	}
}
