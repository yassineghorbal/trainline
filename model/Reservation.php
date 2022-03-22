<?php

require_once "Connection.php";

class Reservation{

	private $ctn;

	function __construct()
	{
		$this->ctn = new Connection;
	}

	public function insertTicket($id, $idVoyage)
	{
		$query = $this->ctn->prepare("INSERT INTO tickets (id, idVoyage) VALUES ('$id', '$idVoyage')");
		$query->execute();
	}

	
}