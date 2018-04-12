<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 29.03.2018
 * Time: 11:41
 */

namespace app;

use app\controller\IndexController;

class Route
{
	private $klein;
	public $title = 'Simple title';

	public function __construct($klein)
	{
		$this->klein = $klein;
		$this->indexRoutes();
		$this->apiRoutes();
	}

	public function indexRoutes()
	{
		$this->klein->respond('GET', '/', function ($request, $response, $service) {
			$indexController = new IndexController();
			$indexController->index();
		});
	}

	public function apiRoutes()
	{
		$this->klein->respond('GET', '/example', function ($request, $response, $service) {

		});
	}
}