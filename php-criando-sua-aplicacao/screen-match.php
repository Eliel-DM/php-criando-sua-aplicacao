<?php

echo "Bem-vindo(a) ao screen match! \n";

$nomeFilme = "Top Gun - Maverick";
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

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento\n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo\n";
} else {
    echo "Esse filme não é um lançamento\n";
}

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-Herói",
    "Se beber não case" => "comédia",
    default => "Generô não identificado",
};

echo "O gênero do filme é: " . $genero;
