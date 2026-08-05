<?php

/*
Nesta aula, aprendemos a manipular variáveis em PHP, além de estudar os tipos e os operadores.

Agora é sua vez! Chegou a hora de você definir os dados de um filme em seu programa e manipular os valores utilizando PHP.

    Defina variáveis com informações sobre o filme, como nome, ano de lançamento, nota e se ele está incluído no plano.
    Realize operações como soma e divisão para, com várias notas, chegar a uma média.
    Utilize operadores lógicos para definir se o filme está incluído no plano.
    Utilize de concatenação e interpolação de strings para formatar a exibição dos dados do filme.
*/

// Todas as entradas serão enviadas pelo usuário.
echo "Bem-vindo(a) ao screen match! \n";

$nomeFilme = "Tarzan 2028";
$anodeLancamento = 2028;
$notaFilme = 8.9;
$inclusoPlano = true;


$notaFilme += 5.0;
$notaFilme += 9.0;
$notaFilme += 10;

$mediaNotaFilme = $notaFilme / 4;

echo "O nome do Filme é: " . $nomeFilme . ", ele foi lançado no ano de " . $anodeLancamento
    . " a média geral do filme é de: " . $mediaNotaFilme;
if ($inclusoPlano) {
    echo " e ele está incluso no plano atual !";
} else {
    echo " e ele não esta incluso no plano atual !";
}
