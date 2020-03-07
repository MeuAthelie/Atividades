<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>O Jogo</title>

    </head>
    <body>
        
            <?php
            session_start();
             echo'   <form method="post" action="anotarjogada.php">
            <label>
            '. $_SESSION["jogador"][0].'
            </label>
            <label>Linha (0,1,2):
                <input type="number" name="linha" required min="0" max="2" /><br />
            </label>
            <label>Coluna (0,1,2):
                <input type="number" name="coluna"  required min="0" max="2"/><br />
            </label>
            <input type="hidden" name="jogador" value="jogador1"/>
                <input type="submit" value="Jogar" />
            
            <label>
            '. $_SESSION["jogador"][1].'
            </label>
            <label>Linha (0,1,2):
                <input type="number" name="linha" required min="0" max="2" /><br />
            </label>
            <label>Coluna (0,1,2):
                <input type="number" name="coluna" required min="0" max="2" /><br />
            </label>
            <input type="hidden" name="jogador" value="jogador2"/>
                <input type="submit" value="Jogar" />
                </form>';
            } else {
                header("location: Tabuleiro.php");
            };
            ?>
            
    </body>
</html>