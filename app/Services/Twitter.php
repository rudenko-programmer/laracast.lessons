<?php
/**
 * Разработал Максим Руденко
 * email: rudenko.programmer@gmail.com
 * Дата: 10.02.2019
 */

namespace App\Services;


class Twitter {

	public $api_key;

	public function __construct($api_key) {
		$this->api_key = $api_key;
	}
}
