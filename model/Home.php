<?php 

require_once "Connection.php";


class Home
{

	private $table="users";
	private $nom;
	private $prenom;
	private $telephone;
	private $email;
	function __construct($nom,$prenom,$telephone,$email)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->telephone=$telephone;
		$this->email=$email;
	}

	

	public static function select()
	{	
		$ctn=new Connection();
		return $ctn->selectAll("voyages");
	}

	public static function view($id)
	{
		$ctn=new Connection();
		return $ctn->selectOne("users", $id); 
	}

	public function update($id)
	{
		$ctn=new Connection();
		$ctn->update($this->table,["nom","prenom","telephone","email"],[$this->nom,$this->prenom,$this->telephone,$this->email],$id);
	}

}