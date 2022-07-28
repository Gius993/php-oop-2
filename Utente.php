<?php
	class Utente{
		public $nome;
		
		public $email;

		public $sconto= 0;

		public $saldo = 0;

		protected $prodottiComprati[];

		public function __construct($_nome, $_email) {
			$this->nome = $_nome;
			$this->email = $_email;
		}
		//pagamenti
		public function aggiungiProdotto(){
			
			$this->$prodottiComprati[] = $prodotto;
		}
		public function getProdottiScelti() {
			return $this->prodottiScelti;
		}
		public function calcolaPrezzoTotale() {
			
			$sommaTotale = 0;
			foreach($this->prodottiScelti as $prodotto) {
				$sommaTotale += $prodotto->prezzo;
			}
	
			
			$sommaTotale -= $sommaTotale * $this->sconto / 100;
	
			return $sommaTotale;
		}
		
		public function effettuaPagamento() {
			$totaleDaPagare = $this->calcolaPrezzoTotale();
			
			if($this->saldo < $totaleDaPagare) {
				die('Saldo non disponibile');
			} else {
				return 'Pagamento avvenuto';
			}
		}
	}

?>