<?php

include "classjogodavelha.php";

session_start();
        
 $j = new jogada($_POST["jogador"],$_POST["linha"],$_POST["coluna"]);

$_SESSION["jogada"][] = $j;

header("location: tabuleiro.php");
?>