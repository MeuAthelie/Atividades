<?php
    include "jogador.php";

        session_start();
        
 
    $p = new jogador($_POST["jogador"]);

    $_SESSION["jogador"][] = $p;    

    header("location: form_jogador.php");
?>

