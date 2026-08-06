<?php

/*
********************
Titular: Vinicius Dias
Saldo atual: R$ 1000
*********************
1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair

Gostaríamos que você supervisionasse o controle do saldo de uma conta. Nesse sentido, é importante incluir informações como o titular da conta, embora por enquanto consideremos que apenas o titular e o saldo sejam suficientes. Além disso, algumas operações devem ser possíveis, como consultar o saldo atual, fazer saques, depósitos ou sair do programa.
*/
$titular = "Eliel Matos";
$saldo = 1000;


while (true) {
    echo "************************\n Titular: " . $titular . "\n Saldo: " . $saldo . "\n************************";
    echo "\n1. Consultar Saldo Atual\n2. Sacar valor\n3. Depositar valor\n4. Sair\n************************\n";

    $validador = fgets(STDIN);

    switch ($validador) {

        case $validador == 1:
            echo "\n SALDO ATUAL:" . $saldo . "\n";
            sleep(5);
            break;
        case $validador == 2:
            echo "Número 2 Selecionado\n";
            break;
        case $validador == 3:
            echo "Número 3 Selecionado\n";
            break;
        case $validador == 4:
            echo "Adeus!\n";
            exit(1);
    }
}
// Acredito que implemntar ess parte com orientação a objetos faça mais sentido na minha cabeça, mas, vou seguir com o que foi ensinado até agora.
