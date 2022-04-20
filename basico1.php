<?php
	$chico = 0.8;
	$juca = 0.6;
	$anos = 0;

	while($juca <= $chico){
		$chico = $chico + 0.06;
		$juca = $juca + 0.09;
		$anos++;
		
	}
	echo("Juca demorrou $anos para passar da altura  de Chico");
?>