<?php 

require_once "Connection.php";


class Home
{
	function __construct()
	{
		
	}


	public function save()
	{
		$ctn=new Connection();
		$ctn->insert($this->table,["dateDepart","dateArrivee","prix","depart","arrivee","idTrain"],[$this->dateDepart,$this->dateArrivee,$this->prix,$this->depart,$this->arrivee,$this->idTrain]);
	}

	public static function select()
	{
		$ctn=new Connection();
		return $ctn->selectAll("voyages");
	}

	public static function delete($idVoyage)
	{
		$ctn=new Connection();
		return $ctn->delete("voyages",$idVoyage);
	}


	public static function edit($idVoyage)
	{
		$ctn=new Connection();
		return $ctn->selectOne("voyages",$idVoyage);
	}

	public function update($idVoyage)
	{
		$ctn=new Connection();
		$ctn->update($this->table,["dateDepart","dateArrivee","prix","depart","arrivee","idTrain"],[$this->dateDepart,$this->dateArrivee,$this->prix,$this->depart,$this->arrivee,$this->idTrain],$idVoyage);
	}
}