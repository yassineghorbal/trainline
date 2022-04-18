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

}