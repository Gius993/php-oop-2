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
	if($giggi_trottola->effettuaPagamento() === 'Pagamento avvenuto'){
		echo 'Acquisto completato';
	}else{
		echo 'il saldo non è sufficiente';
	}

	var_dump($giggi_trottola);

	$michele_lelli = new UtenteNonRegistrato('michele lelli', 'michele@email.it');
	$michele_lelli->aggiungiProdotto($crocchette_whiskas);
	$michele_lelli->saldo = 1;
	if($michele_lelli->effettuaPagamento() === 'Pagamento avvenuto'){
		echo 'Acquisto completato';
	}else{
		echo 'il saldo non è sufficiente';
	}
	var_dump($michele_lelli);

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
		<h1>Cibo</h1>
		<h2><?php echo $crocchette_whiskas->marca ?></h2>
		<h2><?php echo $crocchette_whiskas->prezzo ?> Euro</h2>
		<h2><?php echo $crocchette_whiskas->peso ?> g</h2>
		<h2><?php echo $crocchette_whiskas->durata ?> mesi</h2>
	</div>

	<div>
		<h1>Gioco</h1>
		<h2><?php echo $pallina_gomma->marca ?></h2>
		<h2><?php echo $pallina_gomma->prezzo ?> Euro</h2>
		<h2><?php echo $pallina_gomma->peso ?> g</h2>
		
	</div>

	<div>
		<h1>Utente </h1>
		<p><?php echo $michele_lelli-> nome;?></p>
		<p><?php echo $michele_lelli-> email;?></p>

	</div>

	<div>
		<h1>Utente </h1>
		<p><?php echo $giggi_trottola-> nome;?></p>
		<p><?php echo $giggi_trottola-> email;?></p>
		<h2>Sconto</h2>
		<p><?php echo $giggi_trottola-> sconto;?>%</p>
	</div>

</body>
</html>