<?php 

require_once __DIR__."/../model/Client.php";

class clientController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		$voyages=Client::select();
		require_once __DIR__."/../view/client/login.php";
	}

	public function create()
	{
		require_once __DIR__."/../view/guest/create.php";
	}

	public function save()
	{
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$client=new Client($nom,$prenom,$telephone,$email,$password);
		$client->save();
		header("Location: http://localhost/trainline/home");
	}

	public function edit($idUser)
	{
		$client=Client::edit($idUser);
		require_once __DIR__."/../view/client/edit.php";
	}

	public function update($idUser)
	{
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$client=new Client($nom,$prenom,$telephone,$email,$password);
		$client->update($idUser);
		header("Location: http://localhost/trainline/client");
	}
	public function delete($idUser)
	{
		$clients=Client::delete($idUser);
		header("Location: http://localhost/trainline/client");
	}
}