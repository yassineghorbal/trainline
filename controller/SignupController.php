	<?php 

require_once __DIR__."/../model/Signup.php";

class SignupController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		Signup::select();
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
		$user=new Signup($nom,$prenom,$telephone,$email,$password);
		$user->save();
		header("Location: http://localhost/trainline/home");
	}

	// public function edit($id)
	// {
	// 	Signup::edit($id);
	// 	require_once __DIR__."/../view/client/edit.php";
	// }

	// public function update($id)
	// {
	// 	$nom=$_POST['nom'];
	// 	$prenom=$_POST['prenom'];
	// 	$telephone=$_POST['telephone'];
	// 	$email=$_POST['email'];
	// 	$password=$_POST['password'];
	// 	$user=new Signup($nom,$prenom,$telephone,$email,$password);
	// 	$user->update($idUser);
	// 	header("Location: http://localhost/trainline/home");
	// }

	// public function delete($id)
	// {
	// 	Signup::delete($idUser);
	// 	header("Location: http://localhost/trainline/home");
	// }
}