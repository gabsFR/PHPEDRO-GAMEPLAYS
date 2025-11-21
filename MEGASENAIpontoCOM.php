
<?php

function menu(): void{

    $continue = true;

    do{

        print("            *BIG-SHOT GAMBLING*          \n");
        print("=========================================\n");
        print("[1] - Mega Sena\n");
        print("[2] - Quina\n");
        print("[3] - Lotomania\n");
        print("[4] - Lotofacil\n");
        print("[0] - Sair\n");
        print("Opção: ");

        $opcao = trim(readline(""));

        switch($opcao){
            case '1':
                print("JOGO ESCOLHIDO: Mega Sena.\n");
                MegaSena();
                break;
            case '2':
                print("JOGO ESCOLHIDO: Quina.\n");
                break;
            case '3':
                print("JOGO ESCOLHIDO: Lotomania.\n");
                break;
            case '4':
                print("JOGO ESCOLHIDO: Lotofacil.\n");
                break;
            case '0':
                print("saindo.\n");
                break;
            
            default :
                print("Opção invalida. \n");
                break;
            
        }
    } while ($continue);

}

function MegaSena(){

    $sort = [];

    #$qntdJgs = readline("\nQuantos Jogos deseja?\n");
    $qntdDezenas = readline("\nQuantas dezenas para cada jogo? \n");

    while(count($sort) < $qntdDezenas){
    if($qntdDezenas < 6 or $qntdDezenas > 20){
        print("Quantidade invalida");
        break;
    }else{
        $DezSort = rand(1, 60);
        if (!in_array($DezSort, $sort)){
            $sort[] = $DezSort;
        }
        }
    }
    
    sort($sort);
    
    foreach ($sort as $valor) {
        print "$valor - ";
    }

}

MegaSena();
