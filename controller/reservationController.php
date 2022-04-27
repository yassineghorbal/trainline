<?php

require_once __DIR__."/../model/Reservation.php";


class ReservationController
{
	
	public function __construct()
	{
	}

	public function search()
	{
		session_start();
		$reservation = new Reservation();
		$depart = $_POST['depart'];
		$arrivee = $_POST['arrivee'];
		$result = $reservation->search($depart, $arrivee);
		$resultt = array($result);
		// print_r($result);
		if(count($resultt) == 0)
		{
			$_SESSION['not_found'] = true;
			require_once __DIR__."/../view/index.php";
		}else{
			require_once __DIR__."/../view/client/search.php";
		}
	}

	public function view($id)
	{
		$reservation = new Reservation();
		session_start();
		if(isset($_SESSION['id']))
		{
			$voyage = $reservation->view($id);
			require_once __DIR__."/../view/client/view.php";
		}else{
			$voyage = $reservation->view($id);
			require_once __DIR__."/../view/client/guest_view.php";
		}
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

	public function cancel($idTicket)
	{
		$reservation = new Reservation();
		$reservation->cancel($idTicket);
		header("location: http://localhost/trainline/home");
	}

	// public function guest_view()
	// { 
	// 	$reservation = new Reservation();

	// 	if(isset($_POST['view']))
	// 	$reservation->guest_view();

	// 	require_once __DIR__.'../view/client/guest_book.php';
	// }

	// public function guest_book($id)
	// { 
		
	// 	$reservation = new Reservation();

		
	// 	// $idUser = $result['id'];
		
	// 	$reservation->guest_book($id);

	// 	header("location: http://localhost/trainline/home");
	// }
}