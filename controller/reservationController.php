<?php

require_once __DIR__."/../model/Reservation.php";


class ReservationController
{
	
	public function __construct()
	{
	}

	public function search()
	{
		require_once __DIR__."/../view/client/search.php";
		$search = new Reservation();
		if(isset($_POST['search']))
		{
			$search->search($_POST['depart'], $_POST['arrivee']);
		}
	}

}