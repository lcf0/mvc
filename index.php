<?php 
header("content-type:text/html;charset=utf8");
define('APP_PATH',realpath(dirname(__FILE__)));
define("DS",DIRECTORY_SEPARATOR);
define("LIB",APP_PATH.DS."lib".DS);
define("VIEW",APP_PATH.DS."view".DS);
define("CONTROLLERS",APP_PATH.DS."controllers".DS);
define("CONFIG",APP_PATH.DS."config".DS);
require(LIB."AutoLoader.class.php");
if (new Autoloader()) 
{
	$router = \lib\Router::getInstance();
	$controller = $router->getCon();
	$action = $router->getAction();
	if ($obj = new $controller) {
		if(!method_exists($obj,$action)){
		    echo '未定义'.$action.'方法！';
		}else{
			$obj->$action();
		}
		
	}
	else
	{
		throw new Exception("没有对应的控制器", 1);
		
	}
	
}
else
{
	echo 'mvc文件加载错误';
}

?>