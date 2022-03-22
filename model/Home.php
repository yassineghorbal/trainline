<?php 

require_once "Connection.php";


class Home
{


	public function __construct()
	{
		
	}

	public static function select()
	{	
		$ctn=new Connection();
		return $ctn->selectAll("voyages");
	}

}