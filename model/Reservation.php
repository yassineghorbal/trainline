<?php

require_once "Connection.php";

class Reservation{
    private $table="tickets";
    private $idTicket;
    private $id;
    private $idVoyage;
	private $db;
	function __construct($idTicket, $id, $idVoyage)
	{
		$this->idTicket=$idTicket;
		$this->id=$id;
		$this->idVoyage=$idVoyage;

		// $this->db = new Connection();
	}


	public function save()
	{
		$ctn=new Connection();
		$ctn->insert($this->table,["id","idVoyage"],[$this->id, $this->idVoyage]);
	}

	public static function select()
	{
		$ctn=new Connection();
		return $ctn->selectAll("tickets");
	}

	public static function delete($idTicket)
	{
		$ctn=new Connection();
		return $ctn->delete("tickets",$idTicket);
	}
}

class Signup
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


	public function save()
	{
		$ctn=new Connection();
		$ctn->insert($this->table,["nom","prenom","telephone","email"],[$this->nom,$this->prenom,$this->telephone,$this->email]);
	}

	public static function select()
	{
		$ctn=new Connection();
		return $ctn->selectAll("users");
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