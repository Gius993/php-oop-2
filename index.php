<?php
	//Prodotti
	require_once __DIR__. '/Cibo.php';
	require_once __DIR__. '/Giochi.php';

	//Utenti

	require_once __DIR__ . '/UtenteRegistrato';
	require_once __DIR__ . '/UtenteNonRegistrato';

	$crocchette_whiskas = new Cibo('whiskas', 2, 10, 5);
	var_dump($crocchette_whiskas);

	$pallina_gomma = new Giochi('DadyPet', 1, 4);
	var_dump($pallina_gomma);

	$giggi_trottola = new UtenteRegistrato('gigi trottola', 'giggione@gmail.com');
	$giggi_trottola->aggiungiProdotto($crocchette_whiskas);
	$giggi_trottola->aggiungiProdotto($pallina_gomma);

	var_dump($giggi_trottola);

	$michele_lelli = new UtenteNonRegistrato('michele lelli', 'michele@email.it');
	$michele_lelli->aggiungiProdotto($crocchette_whiskas);
	var_dump($michele_lelli);
?>