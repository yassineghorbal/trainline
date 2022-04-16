<?php

require_once "Connection.php";

class Reservation{

	private $ctn;
	private $id;


	function __construct()
	{
		$this->id =
		$this->ctn = new Connection;
	}

	public function insertTicket($id, $idVoyage)
	{
		$query = $this->ctn->prepare("INSERT INTO tickets (idVoyage) VALUES ('$idVoyage')");
		$query->execute();
	}

	public static function reserver($id)
	{
		$ctn=new Connection();
		return $ctn->selectOne("voyages",$id);
	}


}
