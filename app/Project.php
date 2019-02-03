<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 *
 * @package App
 * @property string title
 * @property string description
 *
 */
class Project extends Model
{
	protected $guarded = [];

	public function tasks(){
		return $this->hasMany(Task::class);
	}
}
