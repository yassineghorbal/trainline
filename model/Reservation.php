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
		$str="SELECT * FROM voyages WHERE depart = '$departSearch' AND arrivee = '$arriveeSearch' AND canceled = 0 AND dateDepart > CURRENT_TIMESTAMP ORDER BY dateDepart";
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
			// echo '<h1>there are no records !!!!!!!</h1>';
			header('location: http://localhost/trainline/home');
			// echo '<script type="text/javascript">alert("Stupid message");history.go(-1);</script>';
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

	public function guest_book()
	{
		$ctn = new Connection();
		if(isset($_POST['guest_book'])){
			$str = "INSERT INTO users (nom, prenom, telephone, email)
				OUTPUT inserted";
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
		WHERE users.id = $idUser 
		ORDER BY dateDepart";
		$query = $ctn->prepare($str);

		$query->execute();
		$row = $query->fetchAll();

		if($row){
			return $row;
		}else{
			// echo '<h2 class="text-danger text-center">Réserver un voyage pour le voir ici !!</h2>';
		}

	}

	public function cancel($idTicket)
	{
		
		$ctn = new Connection();
		if(isset($_POST['cancel']))
		{
			$str = " UPDATE tickets SET canceledticket = 1 WHERE idTicket = $idTicket";
			$query = $ctn->prepare($str);
			$query->execute();
		}else{
			echo "nnn";
		}
	}

}
