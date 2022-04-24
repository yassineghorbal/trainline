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
		$result = $query->fetchAll(PDO::FETCH_ASSOC);

		// $row = array($result);

		if(count($result) > 0)
		{
			// echo "<pre>";
			// print_r($result);
			// echo "<pre>";
			return $result;
		}else{
			// header('Location: http://localhost/trainline/home');
			echo '<h1>there are no records !!!!!!!</h1>';
		}
	}
	
	public function view($id)
	{
		$ctn = new Connection();
		if(isset($_POST['view']))
		{
			return $ctn->selectOne("voyages", $id);
		}
	}

	public function book($idUser, $id)
	{
		$ctn = new Connection();
		if(isset($_SESSION['id']) && isset($_POST['book']))
		{
			$ctn->insert($this->table, ["idUser", "idVoyage"], [$idUser, $id]);
		}
	}

	public function voyages($idUser)
	{
		$idUser = $_SESSION['id'];

		$ctn = new Connection();
		
		$str = "SELECT * FROM tickets 
		INNER JOIN voyages
		ON tickets.idVoyage = voyages.id
		INNER JOIN users
		ON tickets.idUser = users.id
		WHERE users.id = $idUser";
		$query = $ctn->prepare($str);

		$query->execute();
		$row = $query->fetchAll();

		if(count($row) > 0){
			return $row;
		}else{
			echo "réserver un voyage pour le voir ici";
		}

	}

	public function cancel($id)
	{
		$idUser = $_SESSION['id'];
		$ctn = new Connection();
		if(isset($_POST['cancel']))
		{
			$str = "DELETE FROM tickets WHERE idUser = $idUser AND idVoyage = $id";
			$query = $ctn->prepare($str);
			return $query->execute();
		}
	}

}
