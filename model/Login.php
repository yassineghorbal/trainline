<?php 

require_once "Connection.php";


class Login
{
	private $table="users";

	private $email;
    private $password;
	public function __construct($email,$password)
	{
		$this->email=$email;
		$this->password=$password;
	}



	public static function login($email_post, $password_post)
	{
		$ctn = new Connection();
		$str="SELECT * FROM users WHERE email = '$email_post'";
		$query = $ctn->prepare($str);

		$query->execute();
		$row = $query->fetch();

		if ($password_post == $row['password']){
			header('Location: http://localhost/trainline/home');
		}else{
			echo "no";
		}

		// if(!empty($row)){
		// 	return $row;
		// }else{
		// 	return false;
		// }
	}


	public function logout()
	{
		session_start();
		unset($_SESSION['email']);
		header('Location: http://localhost/trainline/login');
	}

    
	// public static function delete($id)
	// {
	// 	$ctn=new Connection();
	// 	return $ctn->delete("users",$id);
	// }


	// public static function edit($id)
	// {
	// 	$ctn=new Connection();
	// 	return $ctn->selectOne("users",$id);
	// }

	// public function update($id)
	// {
	// 	$ctn=new Connection();
	// 	$ctn->update($this->table,["nom","prenom","telephone","email","password"],[$this->nom,$this->prenom,$this->telephone,$this->email,$this->password],$id);
	// }

}