<?php
require_once("kosarkasRestHandler.php");
		
$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];

switch($view){

	case "all":
		//  /kosarkas/list/
		$kosarkasRestHandler = new kosarkasRestHandler();
		$kosarkasRestHandler->sviKosarkasi();
		break;
		
	case "single":
		// /kosarkas/list/<id>/
		$kosarkasRestHandler = new kosarkasRestHandler();
		$kosarkasRestHandler->jedanKosarkas($_GET["id"]);
		break;
		
	case "delete":
		// /kosarkas/delete/<id>/
		$kosarkasRestHandler = new kosarkasRestHandler();
		$kosarkasRestHandler->izbrisiKosarkas($_GET["id"]);
		break;
	case "update":
		// /kosarkas/update/<id>/
		$kosarkasRestHandler = new kosarkasRestHandler();
		$kosarkasRestHandler->updateKosarkas($_GET["id"]);
		break;
	case "dodaj":
		// /kosarkas/dodaj/<id>/
		$kosarkasRestHandler = new kosarkasRestHandler();
		$kosarkasRestHandler->dodajKosarkas();
		break;

	case "" :
		//404 - not found;
		break;
}
?>