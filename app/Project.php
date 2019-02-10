<?php

namespace App;

use App\Mail\ProjectCreated;
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

	public function owner(){
		return $this->belongsTo(User::class);
	}

	public function tasks(){
		return $this->hasMany(Task::class);
	}

	/**
	 * @param $description
	 */
	public function addTask($task){
		$this->tasks()->create($task);

	}
}
