<?php

/*
Praticar é muito importante! Por isso, preparamos uma lista de exercícios para você exercitar o conteúdo abordado nesta aula.

1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].
2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.
3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.
4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.
 */

// 1º Exercício 

$arrayInicial =  [1, 2, 2, 3, 4, 4, 5];
$arrayFinal = [];
$count = sizeof($arrayInicial);

foreach ($arrayInicial as $numeroASerValidado) {
    // Fiz uma pesquisa para entender sobre as formas de buscar um valor em um array com PHP, e ao meu ver nessa situação é o array_search, outra questão é o true no parâmetro é para que seja feita a validação '===';
    $chave = array_search($numeroASerValidado, $arrayFinal, true);
    if ($chave === false) {
        array_push($arrayFinal, $numeroASerValidado);
    }
}

echo "Segue os valores do array Final:\n ";
var_dump($arrayFinal);

//2º Exercício 

$arrayDeNotas = [4, 9, 10, 7.8, 6, 1, 12];

foreach ($arrayDeNotas as $nota) {
    if ($nota < 0 || $nota > 10) {
        echo "Nota inválida! Intervalo aceito de 0 a 10. Valor inserido -> " . $nota . "\n";
    } elseif ($nota <= 6) {
        echo "Nota: $nota Aluno reprovado!\n";
    } else {
        echo  "Nota: $nota Aluno aprovado! \n";
    }
}

//3º Exercício 

$baseDeDadosBancoDoEliel = [
    [
        "titular" => "Eliel",
        "saldo" => 0.9
    ],
    [
        "titular" => "José da Silva Noia",
        "saldo" => 1902391239
    ]
];

foreach ($baseDeDadosBancoDoEliel as $contas) {
    echo "O nome do titular da conta é: " . $contas['titular'] . " e o saldo atual é de: " . $contas['saldo'] . " R$\n";
}

//4º Exercício 

$dadosDosMeusFamiliares = [
    [
        "nome" => "Jéssica",
        "grauDeParentesco" => "Mãe",
    ],
    [
        "nome" => "Jorge Jorgino Julesco",
        "grauDeParentesco" => "pai"
    ]
];

foreach ($dadosDosMeusFamiliares as $parente) {
    echo "O nome é: " . $parente['nome'] . " e ele(a) é meu / minha " . $parente['grauDeParentesco'] . " \n";
}

$dadosDosMeusFamiliares[0] = [
    "nome" => "Jéssica",
    "grauDeParentesco" => "Mãe",
    "idade" => 90
];
$dadosDosMeusFamiliares[1] = [
    "nome" => "Jorge Jorgino Julesco",
    "grauDeParentesco" => "pai",
    "idade" => 300
];

echo "Resultado pós adição de elementos.\n";

foreach ($dadosDosMeusFamiliares as $parente) {
    echo "O nome é: " . $parente['nome'] . " e ele(a) é meu / minha " . $parente['grauDeParentesco'] . " e tem " . $parente['idade'] . " anos\n";
}
