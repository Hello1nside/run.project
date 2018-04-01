<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 30.03.2018
 * Time: 12:34
 */

namespace repo;


class Config
{
	protected static $username = 'root';
	protected static $password = '';
	protected static $servers = [
		'db' => ['host' => 'localhost', 'db' => 'example']
	];
}