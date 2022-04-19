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

	
	public function profile($id)
	{
		$user= Home::view($id);
		require_once __DIR__."/../view/client/profile.php";
	}
	
	
	public function edit($id)
	{
		$user= Home::view($id);
		require_once __DIR__."/../view/client/edit_profile.php";
	}
	
	public function update($id)
	{
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		$user=new Home($nom,$prenom,$telephone,$email);
		$user->update($id);
		header("Location: http://localhost/trainline/home/profile/$id");
	}
	
}