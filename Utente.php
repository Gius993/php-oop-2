<?php
	class Utente{
		public $nome;
		
		public $email;

		public $sconto= 0;

		public $saldo = 0;

		protected $prodottiComprati = [];

		public function __construct($_nome, $_email) {
			$this->nome = $_nome;
			$this->email = $_email;
		}
		//pagamenti
		public function aggiungiProdotto($prodotto){
			
			$this->prodottiComprati[] = $prodotto;
		}
		public function getProdottiScelti() {
			return $this->prodottiScelti;
		}
		public function calcolaPrezzoTotale() {
			
			$sommaTotale = 0;
			foreach($this->prodottiComprati as $prodotto) {
				$sommaTotale += $prodotto->prezzo;
			}
	
			
			$sommaTotale -= $sommaTotale * $this->sconto / 100;
	
			return $sommaTotale;
		}
		
		public function effettuaPagamento() {
			$totaleDaPagare = $this->calcolaPrezzoTotale();
			
			if($this->saldo < $totaleDaPagare) {
				throw new Exception ("Utente: $this->nome: Saldo non disponibile sulla carta");
			} else {
				return 'Pagamento avvenuto';
			}
		}
	}

?>