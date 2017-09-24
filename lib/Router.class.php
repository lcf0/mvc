<?php
namespace lib;
class Router{
	public static $instance=null;
	private $controllersNamespace = '\controllers\\';
	private $controller = 'index';
	private $action = 'index';
	private function __construct()
	{

	}
	public static function getInstance()
	{
		if (!self::$instance) {
			self::$instance = new self;
		}
		return self::$instance;
	}
	public function getCon()
	{
		if (isset($_GET['c']) && !empty($_GET['c'])) 
		{
			$this->controller = $_GET['c'];
		}
		return $this->controllersNamespace.$this->controller;
	}
	public function getAction()
	{
		if (isset($_GET['a']) && !empty($_GET['a'])) 
		{
			$this->action = $_GET['a'];
		}
		return $this->action;
	}


}




?>