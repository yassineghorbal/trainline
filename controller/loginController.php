<?php 

require_once __DIR__."/../model/Login.php";

class LoginController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		session_start();
		if(isset($_SESSION['signup']))
		{
			unset($_SESSION['signup']);
		}
		$users=Login::select();
		require_once __DIR__."/../view/client/login.php";
	}

	public function logout()
	{
		session_start();
		unset($_SESSION['user']);
		header('Location: http://localhost/trainline/home');
	}

	public function userLogin()
	{
		session_start();
		$users=Login::select();
		// var_dump($users) ;

		if(isset($_POST['submit']))
		{
			if(!empty($_POST['email']) && !empty($_POST['password']))
			{
				$email = $_POST['email'];
				$password = $_POST['password'];

				foreach($users as $user)
				{
					if($email == $user['email'] && $password == $user['password'])
					{
						$_SESSION['user'] = $user['name'];
						unset($_SESSION['signup']);
						header("Location: http://localhost/trainline/home");
					} else
					{
						$inccorect = true;
					}
				}
				
			} else {
				$inccorect = true;
			}
		}


		require_once __DIR__."/../view/client/login.php";
	}

	public function create()
	{
		require_once __DIR__."/../view/client/create.php";
	}

	public function save()
	{
		$email=$_POST['email'];
		$password=$_POST['password'];

		$users=new Login($email,$password);
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