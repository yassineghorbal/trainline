<?php 

require_once __DIR__."/../model/Home.php";

class HomeController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		Home::select();
		require_once __DIR__."/../view/index.php";
	}

	public function voyages()
	{
		require_once __DIR__."/../view/client/voyages.php";
	}
	
	public function profile($id)
	{
		$user= Home::view($id);
		require_once __DIR__."/../view/client/profile.php";
	}
	
}