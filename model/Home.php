<?php 

require_once "Connection.php";


class Home
{

	private $table="voyages";
	private $dateDepart;
	private $dateArrivee;
	private $prix;
	private $depart;
	private $arrivee;
	private $idTrain;
	function __construct($dateDepart, $dateArrivee, $prix, $depart, $arrivee,$idTrain)
	{
		$this->dateDepart=$dateDepart;
		$this->dateArrivee=$dateArrivee;
		$this->prix=$prix;
		$this->depart=$depart;
		$this->arrivee=$arrivee;
		$this->idTrain=$idTrain;
	}


	// public function save()
	// {
	// 	$ctn=new Connection();
	// 	$ctn->insert($this->table,["dateDepart","dateArrivee","prix","depart","arrivee","idTrain"],[$this->dateDepart,$this->dateArrivee,$this->prix,$this->depart,$this->arrivee,$this->idTrain]);
	// }

	public static function select()
	{
		$ctn=new Connection();
		return $ctn->selectAll("voyages");
	}

	// public static function delete($id)
	// {
	// 	$ctn=new Connection();
	// 	return $ctn->delete("voyages",$id);
	// }


	// public static function edit($id)
	// {
	// 	$ctn=new Connection();
	// 	return $ctn->selectOne("voyages",$id);
	// }

	// public function update($id)
	// {
	// 	$ctn=new Connection();
	// 	$ctn->update($this->table,["dateDepart","dateArrivee","prix","depart","arrivee","idTrain"],[$this->dateDepart,$this->dateArrivee,$this->prix,$this->depart,$this->arrivee,$this->idTrain],$id);
	// }

}