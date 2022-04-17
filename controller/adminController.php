<?php 

require_once __DIR__."/../model/Admin.php";


class AdminController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		$voyages=Admin::select();
		require_once __DIR__."/../view/admin/admin.php";
	}

	public function create()
	{
		require_once __DIR__."/../view/admin/create.php";
	}


	public function save()
	{
		$dateDepart=$_POST['dateDepart'];
		$dateArrivee=$_POST['dateArrivee'];
		$prix=$_POST['prix'];
		$depart=$_POST['depart'];
		$arrivee=$_POST['arrivee'];
		$idTain=$_POST['idTrain'];

		$voyage=new Admin($dateDepart, $dateArrivee, $prix, $depart, $arrivee,$idTain);
		$voyage->save();
		header("Location: http://localhost/trainline/admin");
	}

	public function edit($idVoyage)
	{
		$voyage=Admin::edit($idVoyage);
		require_once __DIR__."/../view/admin/edit.php";
	}

	public function update($idVoyage)
	{
		$dateDepart=$_POST['dateDepart'];
		$dateArrivee=$_POST['dateArrivee'];
		$prix=$_POST['prix'];
		$depart=$_POST['depart'];
		$arrivee=$_POST['arrivee'];
		$idTain=$_POST['idTrain'];

		$voyage=new Admin($dateDepart, $dateArrivee, $prix, $depart, $arrivee,$idTain);
		$voyage->update($idVoyage);
		header("Location: http://localhost/trainline/admin");
	}
	public function delete($idVoyage)
	{
		$voyages=Admin::delete($idVoyage);
		header("Location: http://localhost/trainline/admin");
	}

}