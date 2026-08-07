<?php

echo "Bem-vindo(a) ao screen match! \n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$notaFilme = 8.8;
$inclusoNoPlano = true;

$quantidadeDeNotas = $argc - 1;
$notas = [];



for ($contador = 1; $contador < $argc; $contador++) {
    $somaDeNotas += $argv[$contador];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
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
    "Top Gun - Maverick" => "ação\n",
    "Thor: Ragnarok" => "super-Herói\n",
    "Se beber não case" => "comédia\n",
    default => "Generô não identificado \n",
};

echo "O gênero do filme é: " . $genero;

$notasParaOFilme = [10, 8, 9, 7.5, 6.8];

var_dump($notasParaOFilme);
