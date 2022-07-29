<?php
	require_once __DIR__.'/ProdottiNegozio.php';
	

	class Cibo extends ProdottiNegozio{
		public $durata;

		public function __construct($_marca, $_prezzo, $_peso, $_durata){
		
			$this->marca = $_marca;
			
			$this->prezzo = $_prezzo;
			
			$this->peso = $_peso;
			
			$this->durata = $_durata;
		}
		public function getInfo() {
			return "$this->marca - Prezzo: $this->prezzo Euro $this->prezzo - Peso: $this->peso g Durata: $this->durata - Mesi ";
		}
	}
?>