<?php
Class Kosarkas {
	
	private $kosarkasi = array(
		1 => 'LeBron James',  
		2 => 'Kevin Durant',  
		3 => 'Nikola Jokic',  			
		4 => 'Luka Doncic',  			
		5 => 'Kyrie Irving',  
		6 => 'Stephan Curry');

	public function sviKosarkasi(){
		return $this->kosarkasi;
	}
	
	public function jedanKosarkas($id){
		if($id==0 || $id>sizeof($this->kosarkasi))
		{
			echo "Netacan id";
		}
		else{
		$kosarkas = array($id => ($this->kosarkasi[$id]) ? $this->kosarkasi[$id] : $this->kosarkasi[1]);
		return $kosarkas;
		}
	}	
	public function izbrisiKosarkas($id){
		unset($this->kosarkasi[$id]);
	}	
	public function updateKosarkas($id){
		$this->kosarkasi[$id]="Jalen Green";
	}
	public function dodajKosarkas(){
		$this->kosarkasi[7]="Jusuf Nurkic";
	}	
}
?>