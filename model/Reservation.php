<?php

require_once "Connection.php";

class Reservation{

	private $ctn;
	private $id;


	function __construct()
	{
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

	public function search($departSearch, $arriveeSearch)
	{
		$ctn = new Connection();
		$str="SELECT * FROM voyages WHERE depart = '$departSearch' AND arrivee = '$arriveeSearch'";
		$query = $ctn->prepare($str);

		$query->execute();
		$row = $query->fetch(PDO::FETCH_ASSOC);

		if($departSearch == $row['depart'] && $arriveeSearch == $row['arrivee'])
		{
			foreach ($row as $voyage) :
                $dateDepart = $row['dateDepart'];
                $dateArrivee = $row['dateArrivee'];
                $prix = $row['prix'];
                $depart = $row['depart'];
                $arrivee = $row['arrivee'];
        
            endforeach;
		}else{
			header('Location: http://localhost/trainline/home');
		}
	}


}
