<?php

require_once __DIR__."/../model/Reservation.php";


class ReservationController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		$reservation=Reservation::select();
		require_once __DIR__."/../view/client/reservation.php";
	}

	public function book()
	{
		$idTicket=$_POST['idTicket'];
		$id=$_POST['id'];
		$voyage=$_POST['idVoyage'];
		

		$reservation = new Reservation($idTicket, $id, $voyage);
		header("Location: http://localhost/trainline/home");
		
	}

	public function cancel($idTicket)
	{
		$reservation=Reservation::delete($idTicket);
		header("Location: http://localhost/trainline/home");
	}
}