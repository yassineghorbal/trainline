<?php 

require_once __DIR__."/../model/Guest.php";

class GuestController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		$voyages=Guest::select();
		require_once __DIR__."/../view/client/signup.php";
	}

	public function create()
	{
		require_once __DIR__."/../view/client/create.php";
	}

	public function save()
	{
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$guest=new Guest($nom,$prenom,$telephone,$email,$password);
		$guest->save();
		header("Location: http://localhost/trainline/home");
	}

	public function edit($idUser)
	{
		$guest=Guest::edit($idUser);
		require_once __DIR__."/../view/user/edit.php";
	}

	public function update($idUser)
	{
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$guest=new Guest($nom,$prenom,$telephone,$email,$password);
		$guest->update($idUser);
		header("Location: http://localhost/trainline/guest");
	}
	public function delete($idUser)
	{
		$guests=Guest::delete($idUser);
		header("Location: http://localhost/trainline/guest");
	}
}