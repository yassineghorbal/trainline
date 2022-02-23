<?php 

require_once __DIR__."/../model/Login.php";

class loginController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		$users=Login::select();
		require_once __DIR__."/../view/client/login.php";
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

		$users=new Login($nom,$prenom,$telephone,$email,$password);
		$users->save();
		header("Location: http://localhost/trainline/home");
	}

	public function edit($idUser)
	{
		$users=Login::edit($idUser);
		require_once __DIR__."/../view/login/edit.php";
	}

	public function update($idUser)
	{
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$users=new Login($nom,$prenom,$telephone,$email,$password);
		$users->update($idUser);
		header("Location: http://localhost/trainline/login");
	}

	public function delete($idUser)
	{
		$users=Login::delete($idUser);
		header("Location: http://localhost/trainline/login");
	}


	public function login()
	{
	
		$email=$_POST['email'];
		$password=$_POST['password'];
		$log = new Login(" "," "," ",$email,$password);
		$log->login($email,$password);
		header("Location: http://localhost/trainline/home");
	}
}