<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 12.04.2018
 * Time: 11:28
 */

namespace core;

class Controller
{
	public $title = 'Simple title';

	public function render($view, $data = [])
	{
		if (is_object($view) || is_array($view)) {
			header('Content-Type: application/json');
			echo json_encode($view);
		} else {
			if (strpos('.', $view)) {
				return 'Error';
			}
			extract($data);
		}
	}

	public function printLayout($view, $data = [], $title = false)
	{
		if (is_object($view) || is_array($view)) {
			$this->render($view, $data);
		} else {
			$this->title = $title ?: $this->title;
			include_once ROOT . '/views/basic/_layout.phtml';
		}
	}
}