<?php
class Autoloader{


	public function __construct()
	{
		spl_autoload_register(array($this,"load"));
	}
	public function load($className)
	{
		$className = str_replace("\\", DS, $className);
		$className.='.class.php';
		if (file_exists($className)) 
		{
			include $className;
		}
		else
		{
			echo '文件不存在';
			exit;
		}
	}
}




?>