<?php

    const checkspecial = 500;
    $clientes = [];

    function menu(): void {

    print("===============================\n");
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

        $opcao = readline();

        switch ($$opcao) {
            case '1':
                cadastroUser($clientes);
                break;
            case '2':
                cadastrarConta($clientes);
                break;
            case '3':
                depositar($clientes);
                break;
            case '0':
                print("Saindo...\n");
                die();
            default:
                print("Opção inválida.\n");
                break;
        }
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

        $numConta = rand(10000, 100000);

        $clientes[$cpf]['contas'][$numConta] = [
            'saldo' => 0,
            'cheque_especial' => checkspecial,
            'extrato' => [] 
        ];

        print "Conta criada com sucesso\n";
        return true;
    }

    function depositar(array &$clientes){
        $cpf = readline("informe seu CPF novamente: ");

        $numConta = readline("Informe o numero da conta: ");

        $valorDeposito = (float) readline("Informe o valor do depósito: ");

        if($valorDeposito <= 0){
            print "Valor de deposito invalido \n";
        }
        
        $clientes[$cpf]['contas'][$numConta]['saldo'] += $valorDeposito;

        $dataHora = date('d/m/Y H:i');
        $clientes[$cpf]['contas'][$numConta]['extrato'] = "Deposito de R$ $valorDeposito em $dataHora";

        print "Depósito realizado com sucesso\n";
        return true;
    }

        menu();

        

    
