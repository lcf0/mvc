<?php
namespace controllers;
use lib\Controller;

class Index extends Controller{
	public function index()
	{
		$data = array(1,2,3);
		return $this->view('index',array('list'=>$data));
	}
	
}

?>