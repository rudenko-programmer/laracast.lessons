<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $appKey;

	/**
	 * Example constructor.
	 *
	 * @param $appKey
	 */
	public function __construct() {
		$this->appKey = 'sssssssssssssss';
	}


}
