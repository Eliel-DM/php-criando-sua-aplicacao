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


while (true) {
    echo "
    **********************
    Titular: 
    Saldo atual: 
    **********************
    1. Consultar Saldo Atual
    2. Sacar valor 
    3. Depositar valor
    4. Sair
    ";

    $validador = fgets(STDIN);

    switch ($validador) {

        case $validador == 1:
            echo "Número 1 Selecionado\n";
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
