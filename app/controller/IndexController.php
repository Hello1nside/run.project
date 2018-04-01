<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 30.03.2018
 * Time: 11:48
 */

namespace app\controller;

use app\model\TasksModel;

class IndexController
{
	public static function getTasks()
	{
		$tasksModel = new TasksModel();
		$result = $tasksModel->getTask();

		echo '<pre>';
        print_r($result);
		echo '</pre>';
	}
}