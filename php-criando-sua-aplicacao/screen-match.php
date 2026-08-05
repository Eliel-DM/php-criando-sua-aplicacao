<?php

echo "Bem-vindo(a) ao screen match! \n";

$nomeFilme = "Top gun - Maverick";
$anoLancamento = $argv[1] ?? 2022; // Solicita o valor via CLI, que caso não seja identificado envia o valor 2022. Anotado no caderno [ARGUMENTCOUNT] & [NULL COALESCING OPERATOR]
$notaFilme = 8.8;
$inclusoNoPlano = true;


$somaDeNotas = 9;
$somaDeNotas += 7.5;
$somaDeNotas += 6;
$notaFilme = $somaDeNotas / 3;
$planoPrime = true;

$inclusoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: " . $notaFilme . "\n";
echo "Ano de Lançamento: " . $anoLancamento . "\n";
