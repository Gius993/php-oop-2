<?php
	//Prodotti
	require_once __DIR__. '/Cibo.php';
	require_once __DIR__. '/Giochi.php';

	//Utenti

	require_once __DIR__ . '/UtenteRegistrato.php';
	require_once __DIR__ . '/UtenteNonRegistrato.php';

	$crocchette_whiskas = new Cibo('whiskas', 2, 10, 5);
	
	var_dump($crocchette_whiskas);

	$pallina_gomma = new Giochi('DadyPet', 1, 4);
	
	var_dump($pallina_gomma);

	$giggi_trottola = new UtenteRegistrato('gigi trottola', 'giggione@gmail.com');
	$giggi_trottola->aggiungiProdotto($crocchette_whiskas);
	$giggi_trottola->aggiungiProdotto($pallina_gomma);
	$giggi_trottola->saldo = 20;
	try{

		if($giggi_trottola->effettuaPagamento() === 'Pagamento avvenuto'){
			echo '<h2>Acquisto completato<h2>';
		}
	}catch(Exception $e){
		error_log($e->getMessage());

		echo 'Non è stato possibile effettuare questa operazione controllare saldo e riprovare grazie.';
	}

	

	$michele_lelli = new UtenteNonRegistrato('michele lelli', 'michele@email.it');
	$michele_lelli->aggiungiProdotto($crocchette_whiskas);
	$michele_lelli->saldo = 1;
	try{

		if($michele_lelli->effettuaPagamento() === 'Pagamento avvenuto'){
			echo '<h2>Acquisto completato<h2>';
		}
	}catch(Exception $i){
		error_log($i->getMessage());

		echo 'Non è stato possibile effettuare questa operazione controllare saldo e riprovare grazie.';
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>

	</div>

	<div>
		
		
	</div>


</body>
</html>