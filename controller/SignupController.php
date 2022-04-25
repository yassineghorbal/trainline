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
		$password= PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT);	
		$user=new Signup($nom,$prenom,$telephone,$email,$password);
		$user->save();
		header("Location: http://localhost/trainline/home");
	}
}