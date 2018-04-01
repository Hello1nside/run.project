<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 30.03.2018
 * Time: 12:38
 */

namespace core;

use Medoo\Medoo;
use repo\Config;

class DB extends Config
{
	public static function mysql($server = false, $host = false, $username = false, $password = false)
	{
		if ($server) {
			$db = parent::$servers[$server]['db'];
			$host = parent::$servers[$server]['host'];
		} else {
			$db = '';
			$host = 'localhost';
		}

		$username = $username ?: parent::$username;
		$password = $password ?: parent::$password;

		return new Medoo([
			'database_type' => 'mysql',
			'database_name' => $db,
			'server' => $host,
			'username' => $username,
			'password' => $password
		]);
	}
}