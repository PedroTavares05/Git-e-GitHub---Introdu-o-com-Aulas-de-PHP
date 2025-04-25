<?php
        // Exemplo de uso do operador de coalescência nula
        // Exemplo de uso do operador de coalescência nula (??) em PHP 7.0 ou superior
        // O operador ?? retorna o valor à esquerda se ele existir e não for nulo; caso contrário, retorna o valor à direita.

        //usando o comando echo para imprimir na tela/
            $_COOKIE['nome'] = "Pedro Henrique";
            $_COOKIE['idade'] = 17; 
            $_COOKIE['preco'] = 25.5; 
            $_COOKIE['profissao'] = "Tecnico em Desenvolvimento web";
               
                echo "Meu nome é " . $_COOKIE['nome'] . ", tenho " . $_COOKIE['idade'] . " anos, minha profissão é de " . $_COOKIE['profissao'] . " e o preço do produto é de R$" . $_COOKIE['preco'] . ".<br> E meu preço é de R$" . $_COOKIE['preco'] . ".<br>";
?>
  