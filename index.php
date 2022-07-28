<?php
	
	require_once __DIR__. '/Cibo.php';
	require_once __DIR__. '/Giochi.php';

	

	$crocchette_whiskas = new Cibo('whiskas', 2, 10, 5);
	var_dump($crocchette_whiskas);

	$pallina_gomma = new Giochi(':DadyPet', 1, 4);
	var_dump($pallina_gomma);
?>