<?php

    const checkspecial = 500;
    $clientes = [];

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


    function cadastroUser(&$clientes): bool {
                
        $nome = readline('Informe seu nome: ' . "\n");
        $cpf = readline('informe seu CPF: ' . "\n");
        
        if(isset($clientes[$cpf])){
            print('Esse CPF já possui cadastro' . "\n");
            return false;
        }
        
        
        $clientes[$cpf] = [
        'nome' => $nome, 
        'cpf' => $cpf,
        'contas' => []
        ];

        return true;

    }

    function cadastrarConta(array &$clientes): bool {

        $cpf = readline("Informe seu CPF: ");

        if(!isset($clientes[$cpf])){
            print "Cliente não possui cadastro \n";
            return false;
        }

        $numConta = uniqid();

        $clientes[$cpf]['contas'][$numConta] = [
            'saldo' => 0,
            'cheque_especial' => checkspecial,
            'extrato' => [] 
        ];

        print "Conta criada com sucesso\n";
        return true;
    }

    function depositar($clientes){
        $cpf = readline("informe seu CPF novamente: ");

        $numConta = readline("Informe o numero da conta: ");
    }


    cadastroUser($clientes);
    print_r($clientes);
    
    cadastrarConta($clientes);
    print_r($clientes);
