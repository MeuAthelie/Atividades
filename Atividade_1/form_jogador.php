<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>O Jogo</title>

    </head>
    <body>
        
            <?php
            session_start();
            if (!isset($_SESSION["jogador"])){
             echo'   <form method="post" action="instanciarjogador.php">
            <label>Jogador:
                <input type="text" name="jogador" /><br />
            </label>

                <input type="submit" value="Entrar" />
            
            </form>    ';
            }
            elseif(sizeof($_SESSION["jogador"]) == 1){
                echo'   <form method="post" action="instanciarjogador.php">
            <label>Jogador:
                <input type="text" name="jogador" /><br />
            </label>

                <input type="submit" value="Entrar" />
                </form>';
            } else {
                header("location: Tabuleiro.php");
            };
            ?>
            
    </body>
</html>