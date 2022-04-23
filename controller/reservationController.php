<?php

require_once __DIR__."/../model/Reservation.php";


class ReservationController
{
	
	public function __construct()
	{
	}

	public function search()
	{
		$reservation = new Reservation();
		$search = $_POST['search'];
		if(isset($search))
		{
			$result = $reservation->search($_POST['depart'], $_POST['arrivee']);
			// print_r($result);
			require_once __DIR__."/../view/client/search.php";
		}	
	}

	public function view($id)
	{
		$reservation = new Reservation();
		
		$voyage = $reservation->view($id);
		require_once __DIR__."/../view/client/view.php";
	}

	public function book($id)
	{
		session_start();
		$idUser = $_SESSION['id'];

		$reservation = new Reservation();

		$reservation->book($idUser, $id);

		header("location: http://localhost/trainline/reservation/voyages/$idUser");
	}

	public function voyages($idUser)
	{
		$reservation = new Reservation();
		session_start();
		$idUser = $_SESSION['id'];

		if(isset($_SESSION['id'])){

		$result = $reservation->voyages($idUser);
		// print_r($result);
		require_once __DIR__."/../view/client/voyages.php";
		}
	}

	public function cancel($id)
	{
		session_start();
		$idUser = $_SESSION['id'];

		$reservation = new Reservation();

		echo $id;

		if($reservation->cancel($id)){
			header("location: http://localhost/trainline/home");
		}else{


			
			header("location: http://localhost/trainline/reservation/voyages/$idUser");
		}

	}
}