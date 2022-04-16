<?php

require_once __DIR__."/../model/Reservation.php";


class ReservationController
{
	
	public function __construct()
	{
		$this->reservationModel = new Reservation;
	}

	public function index()
	{
		require_once __DIR__."/../view/client/reservation.php";

		// session_start();
		// if(isset($_SESSION['idUser']) && isset($_POST['book']))
		// {
		// 	// $this->reservationModel->insertTicket($_SESSION['idUser'], $_POST['idVoyage']);
		// 	$voyage = Reservation::reserver();
		// 	require_once __DIR__."/../view/client/reservation.php";
		// 	// header("location: http://localhost/trainline/reservation");
		// }
	}

	public function reserver($idVoyage)
	{
		session_start();
		if(isset($_SESSION['idUser']) && isset($_POST['book']))
		{
			// $this->reservationModel->insertTicket($_SESSION['idUser'], $_POST['idVoyage']);
			$voyage = Reservation::reserver($idVoyage);
			require_once __DIR__."/../view/client/reservation.php";

		}
	}


}