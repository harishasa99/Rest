<?php
require_once("SimpleRest.php");
require_once("kosarkas.php");
		
class KosarkasRestHandler extends SimpleRest {

	function sviKosarkasi() {	

		$kosarkas = new Kosarkas();
		$rawData = $kosarkas->sviKosarkasi();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'Nema kosarkasa');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($rawData);
			echo $response;
		} else if(strpos($requestContentType,'text/html') !== false){
			$response = $this->encodeHtml($rawData);
			echo $response;
		} else if(strpos($requestContentType,'application/xml') !== false){
			$response = $this->encodeXml($rawData);
			echo $response;
		}
	}
	
	public function encodeHtml($responseData) {
	
		$htmlResponse = "<table border='1'>";
		foreach($responseData as $key=>$value) {
    			$htmlResponse .= "<tr><td>". $key. "</td><td>". $value. "</td></tr>";
		}
		$htmlResponse .= "</table>";
		return $htmlResponse;		
	}
	
	public function encodeJson($responseData) {
		$jsonResponse = json_encode($responseData);
		return $jsonResponse;		
	}
	
	public function encodeXml($responseData) {
		// creating object of SimpleXMLElement
		$xml = new SimpleXMLElement('<?xml version="1.0"?><kosarkas></kosarkas>');
		foreach($responseData as $key=>$value) {
			$xml->addChild($key, $value);
		}
		return $xml->asXML();
	}
	
	public function jedanKosarkas($id) {

		$kosarkas = new Kosarkas();
		$rawData = $kosarkas->jedanKosarkas($id);

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'Nema kosarkasa');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($rawData);
			echo $response;
		} else if(strpos($requestContentType,'text/html') !== false){
			$response = $this->encodeHtml($rawData);
			echo $response;
		} else if(strpos($requestContentType,'application/xml') !== false){
			$response = $this->encodeXml($rawData);
			echo $response;
		}
	}

	public function izbrisiKosarkas($id) {

		$kosarkas = new Kosarkas();
		$kosarkas->izbrisiKosarkas($id);
		$rawData = $kosarkas->sviKosarkasi();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'Nema kosarkas');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
			
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($rawData);
			echo $response;
		} else if(strpos($requestContentType,'text/html') !== false){
			$response = $this->encodeHtml($rawData);
			echo $response;
		} else if(strpos($requestContentType,'application/xml') !== false){
			$response = $this->encodeXml($rawData);
			echo $response;
		}
}
public function updateKosarkas($id) {

	$kosarkas = new Kosarkas();
	$kosarkas->updateKosarkas($id);
	$rawData = $kosarkas->sviKosarkasi();

	if(empty($rawData)) {
		$statusCode = 404;
		$rawData = array('error' => 'Nema kosarkasa');		
	} else {
		$statusCode = 200;
	}

	$requestContentType = $_SERVER['HTTP_ACCEPT'];
	$this ->setHttpHeaders($requestContentType, $statusCode);
		
	if(strpos($requestContentType,'application/json') !== false){
		$response = $this->encodeJson($rawData);
		echo $response;
	} else if(strpos($requestContentType,'text/html') !== false){
		$response = $this->encodeHtml($rawData);
		echo $response;
	} else if(strpos($requestContentType,'application/xml') !== false){
		$response = $this->encodeXml($rawData);
		echo $response;
	}
}

public function dodajKosarkas() {

	$kosarkas = new Kosarkas();
	$kosarkas->dodajKosarkas();
	$rawData = $kosarkas->sviKosarkasi();

	if(empty($rawData)) {
		$statusCode = 404;
		$rawData = array('error' => 'Nema kosarkasa');		
	} else {
		$statusCode = 200;
	}

	$requestContentType = $_SERVER['HTTP_ACCEPT'];
	$this ->setHttpHeaders($requestContentType, $statusCode);
		
	if(strpos($requestContentType,'application/json') !== false){
		$response = $this->encodeJson($rawData);
		echo $response;
	} else if(strpos($requestContentType,'text/html') !== false){
		$response = $this->encodeHtml($rawData);
		echo $response;
	} else if(strpos($requestContentType,'application/xml') !== false){
		$response = $this->encodeXml($rawData);
		echo $response;
	}
}

}


?>