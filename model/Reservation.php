<?php

require_once "Connection.php";

class Reservation{
    private $table="tickets";
    private $idVoyage;
	function __construct($idVoyage)
	{
		$this->idVoyage=$idVoyage;
		
	}


	public function save()
	{
		$ctn=new Connection();
		$ctn->insert($this->table,["idVoyage"],[$this->idVoyage]);
	}

	public static function select()
	{
		$ctn=new Connection();
		return $ctn->selectAll("tickets");
	}

	public static function delete($id)
	{
		$ctn=new Connection();
		return $ctn->delete("tickets",$id);
	}


	public static function edit($id)
	{
		$ctn=new Connection();
		return $ctn->selectOne("voyages",$id);
	}

	public function update($id)
	{
		$ctn=new Connection();
		$ctn->update($this->table,["dateDepart","dateArrivee","prix","depart","arrivee","idTrain"],[$this->dateDepart,$this->dateArrivee,$this->prix,$this->depart,$this->arrivee,$this->idTrain],$id);
	}
}