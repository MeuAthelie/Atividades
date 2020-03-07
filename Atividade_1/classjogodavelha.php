<?php
        class Jogada{
            private $jogador;
            private $linha;
            private $coluna;
            
            
            public function _construct($jog,$lin,$col){
                $this->jogador = $jog;
                $this->linha = $lin;
                $this->coluna = $col;
            }


















            





















/*sequencia logica para verificar ganhador*/


	public int verificarVencedor() {
		for (int $i = 0; $i < 3; $i++) {
			if (($jogo[$i][0] == $jogo[$i][1]) &&
				($jogo[$i][0] == $jogo[$i][2])) {
				if ($jogo[$i][0] != 0) {
					return $jogo[$i][0];
				}
			}
		}
		for (int $j = 0; $j < 3; $j++) {
			if (($jogo[0][$j] == $jogo[1][$j]) &&
				($jogo[0][$j] == $jogo[2][$j]) &&
				($jogo[0][$j] != 0)) {
				return $jogo[0][$j];
			}
		}
		if (($jogo[0][0] == $jogo[1][1]) &&
			($jogo[0][0] == $jogo[2][2]) &&
			($jogo[0][0] != 0)) {
			return $jogo[0][0];
		}
		if (($jogo[0][2] == $jogo[1][1]) &&
			($jogo[0][2] == $jogo[2][0]) &&
			($jogo[0][2] != 0)) {
			return $jogo[0][2];
		}
		for (int $i = 0; $i < 3; $i++) {
			for (int $j = 0; $j < 3; $j++) {
				if ($jogo[$i][$j] == 0) {
					return 0;
				}
			}
		}
		return 3;
	}
	
	
?>