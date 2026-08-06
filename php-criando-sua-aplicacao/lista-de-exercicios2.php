<?php
/*
Praticar é muito importante! Por isso, preparamos uma lista de exercícios para você exercitar o conteúdo abordado nesta aula.

1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.

2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).

Você pode clicar no botão “Opinião do instrutor” para conferir as respostas.
*/

// 1º Exercício 

for ($count = 0; $count <= 100; $count++) {
    if ($count % 2 != 0) {
        echo $count . "\n";
    }
}

// 2º Exercício 
// IMC = Peso ÷ (Altura × Altura)

$peso = 85;
$altura = 1.78;

$imc = $peso / ($altura * $altura);

echo "O IMC é: " . $imc . "\n";

// 3º Exercicio 

$horarioAtual = 1;

if (($horarioAtual >= 18 && $horarioAtual <= 23) || ($horarioAtual >= 0 && $horarioAtual < 6)) { // Levando que a noite vai ser de 18 Até ás 06 da manhã ....
    echo "Boa noite !";
} elseif ($horarioAtual >= 6 && $horarioAtual < 12) {
    echo "Bom dia !";
} elseif ($horarioAtual >= 12 && $horarioAtual <= 18) {
    echo "Boa tarde !";
} else {
    echo "Horário não é válido";
}
