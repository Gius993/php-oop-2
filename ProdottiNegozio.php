<?php
require_once __DIR__ . '/ProdottoSerie.php';
class ProdottiNegozio{
	
	use ProdottoSerie;

	public $marca;
	
	public $prezzo;
	
	public $peso;

	public function __construct($_marca, $_prezzo, $_peso){
		
		$this->marca = $_marca;
		
		$this->prezzo = $_prezzo;
		
		$this->peso = $_peso;
	
	}
	
	public function getInfo() {
        return "$this->marca - Prezzo: $this->prezzo Euro $this->prezzo - Peso: $this->peso g ";
    }

}

?>