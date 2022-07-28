<?php

class ProdottiNegozio{
	
	public $marca;
	
	public $prezzo;
	
	public $peso;

	public function__construct($_marca, $_prezzo, $_peso){
		
		$this->marca = $_marca;
		
		$this->prezzo = $_prezzo;
		
		$this->peso = $_peso;
	
	}
	
	// public function getInfo() {
    //     return "$this->marca  $this->prezzo - Euro: $this->peso  - kg ";
    // }

}

?>