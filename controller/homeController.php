<?php 

require_once __DIR__."/../model/Home.php";

class HomeController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		$voyages=Home::select();
		require_once __DIR__."/../view/index.php";
	}



}