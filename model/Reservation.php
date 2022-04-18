<?php

require_once "Connection.php";

class Reservation{
	private $table="tickets";
	function __construct()
	{
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
			return $row;
		}else{
			header('Location: http://localhost/trainline/home');
		}
	}
	
	public function view($idUser, $idVoyage)
	{
		session_start();
		$idUser = $_SESSION['id'];
		$idVoyage = $_POST['id'];
		$ctn = new Connection();
		if(isset($_SESSION['id']) && isset($_POST['view']))
		{
			return $ctn->selectOne("voyages",$idVoyage);
			return $ctn->selectOne("users",$idUser);
		}
	}

	public function book()
	{
		session_start();
		$id = $_SESSION['id'];
		$idVoyage = $_POST['idVoyage'];
		$ctn = new Connection();
		if(isset($_SESSION['id']) && isset($_POST['book']))
		{
			$ctn->insert($this->table, ["idUser", "idVoyage"], [$id, $idVoyage]);
		}
	}

}
