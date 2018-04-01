<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 30.03.2018
 * Time: 11:47
 */

namespace app\model;

use core\DB;

class TasksModel
{
	private $db;

	public function __construct()
	{
		$this->db = DB::mysql('db');
	}

	public function getTask()
	{
		$res = $this->db->select('tasks', '*', ['del' => 0]);
		return $res;
	}
}