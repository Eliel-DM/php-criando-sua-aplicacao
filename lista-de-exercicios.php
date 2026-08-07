<?php

/*
Praticar é muito importante! Por isso, preparamos uma lista de exercícios para você exercitar o conteúdo abordado nesta aula.

1 - Escreva um programa em PHP que exiba seu nome na tela.
2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.
5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
Você pode clicar no botão “Opinião do instrutor” para conferir as respostas.

*/

// 1º Exercício

echo "Eliel Dias Matos\n";

// 2º Exercício

$nota1 = 9;
$nota2 = 8;
$nota3 = 9.7;

$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média é " . $media . "\n";

//3º Exercício 
// Dado que cada 1m == 100cm

$exemploValorEmMetros = 15;

$valorEmCentimetros = $exemploValorEmMetros * 100;
echo "A metragem: " . $exemploValorEmMetros . " em centímetros é " . $valorEmCentimetros . "\n";

//4º Exercício 
/*
Para ser Bissexto, é preciso seguir as seguintes regras: 
Regra Geral: O ano deve ser divisível por 4.
A Exceção: Se o ano for divisível por 100, ele não é bissexto.
A Exceção da Exceção: Se o ano for divisível por 400, ele volta a ser bissexto.
*/

$exemploAnoInserido = 2024;

if (($exemploAnoInserido % 4 == 0 && $exemploAnoInserido % 100 != 0) || ($exemploAnoInserido % 400 == 0)) {
    echo "Ano Bissexto!\n";
} else {
    echo "Ano normal!\n";
}

// 5º Exercício
/*
//Fórmula (0 °C × 9/5) + 32 = 32 °F
// 9/5 == 1.8 logo -> (0° * 1.8) + 32 = 32 °F
*/

$exemploValorCelsius = 30;

$valorConvertidoParaFahrenheit = (30 * 1.8) + 32;

echo "O valor: " . $exemploValorCelsius . " em Fahrenheit é: " . $valorConvertidoParaFahrenheit;
