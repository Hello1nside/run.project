<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 30.03.2018
 * Time: 11:48
 */

namespace app\controller;

use core\Controller;

class IndexController extends Controller
{
	public function index()
	{
		$this->printLayout('index', false, 'Main page');
	}
}