<?php 

require_once __DIR__."/../model/Reservation.php";


class ReservationController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		$voyages=Reservation::select();
		require_once __DIR__."/../view/client/reservation.php";
	}

	public function book($idVoyage)
	{
		$dateDepart=$_POST['dateDepart'];
		$dateArrivee=$_POST['dateArrivee'];
		$prix=$_POST['prix'];
		$depart=$_POST['depart'];
		$arrivee=$_POST['arrivee'];
		$idTain=$_POST['idTrain'];

		$voyage=new Reservation($dateDepart, $dateArrivee, $prix, $depart, $arrivee,$idTain);
		$voyage->update($idVoyage);
		header("Location: http://localhost/trainline/home");
	}
	public function cancel($idVoyage)
	{
		$voyages=Admin::delete($idVoyage);
		header("Location: http://localhost/trainline/admin");
	}

}