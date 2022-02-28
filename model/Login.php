<?php 

require_once "Connection.php";


class Login
{
	private $table="users";
	
	private $email;
    private $password;
	function __construct($email,$password)
	{

		$this->email=$email;
		$this->password=$password;
	}

	public function login(){
		
	}

	// public function save()
	// {
	// 	$ctn=new Connection();
	// 	$ctn->insert($this->table,["nom","prenom","telephone","email","password"],[$this->nom,$this->prenom,$this->telephone,$this->email,$this->password]);
	// }

	public static function select()
	{
		$ctn=new Connection();
		return $ctn->selectAll("users");
	}


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