<?php 

require_once __DIR__."/../model/Signup.php";

class SignupController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		$users=Signup::select();
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

		$users=new Signup($nom,$prenom,$telephone,$email,$password);
		$users->save();
		header("Location: http://localhost/trainline/home");
	}

	public function edit($idUser)
	{
		$users=Signup::edit($idUser);
		require_once __DIR__."/../view/client/edit.php";
	}

	public function update($idUser)
	{
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$users=new Signup($nom,$prenom,$telephone,$email,$password);
		$users->update($idUser);
		header("Location: http://localhost/trainline/guest");
	}
	public function delete($idUser)
	{
		$users=Signup::delete($idUser);
		header("Location: http://localhost/trainline/guest");
	}
}