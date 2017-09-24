<?php
namespace lib;
class Controller{

	public function view($VIEWname,$data=[])
	{
		extract($data);
		include VIEW.$VIEWname.'.php';
	}

}




?>