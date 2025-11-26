<?php

    const checkspecial = 500;
    $clientes = [];

    cadastroUser();

    function menu(): void {

    print("|       *BIG-SHOT BANK*       |\n");
    print("===============================\n");
    print("[1] - CRIAR USER \n");
    print("[2] - CRIAR CONTA \n");
    print("[3] - DEPOSITAR \n");
    print("[4] - SACAR \n");
    print("[5] - SALDO\n");
    print("[6] - EXTRATO\n");
    print("[0] - SAIR\n");
    print("Opção: ");


    }


    function cadastroUser(){
        
        global $clientes;
        
        $cliente = [];

        $nome = readline('Informe seu nome: ' . "\n");
        $cpf = readline('informe seu CPF: ' . "\n");
        $clientes[$cpf] = [
        'nome' => $nome, 
        'cpf' => $cpf];

        var_dump($cliente);
    }
