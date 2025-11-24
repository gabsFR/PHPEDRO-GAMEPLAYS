<?php

    menu();

function menu(): void{

    $continue = true;

    do{

        print("|           *BIG-SHOT GAMBLING*         |\n");
        print("=========================================\n");
        print("[1] - Mega Sena - 6 a 20\n");
        print("[2] - Quina - 5 a 15\n");
        print("[3] - Lotomania - 50\n");
        print("[4] - Lotofacil - 15 a 20\n");
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
                Quina();
                break;
            case '3':
                print("JOGO ESCOLHIDO: Lotomania.\n");
                Lotomania();
                break;
            case '4':
                print("JOGO ESCOLHIDO: Lotofacil.\n");
                Lotofacil();
                break;
            case '0':
                print("saindo...\n");
                break;
                $continue == false;
                
            
            default :
                print("Opção invalida. \n");
                break;
            
        }
    } while ($continue == true);

}

function MegaSena(){

    print("|          *MEGA-SENA*          |\n");
    print("=================================\n");



    $sort = [];

    $qntdJgs = readline("|QUANTIDADE DE JOGOS:\n");
    $qntdDezenas = readline("|QUANTIDADE DE NUMEROS:\n");

    for ($i=0; $i < $qntdJgs; $i++) { 
        
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
        print "| $valor ";
    }

    $sort = [];
    print("\n");
}

}

function Quina(){
   
    print("|          *QUINA*         |\n");
    print("============================\n");



    $sort = [];

    $qntdJgs = readline("|QUANTIDADE DE JOGOS:\n");
    $qntdDezenas = readline("|QUANTIDADE DE NUMEROS:\n");

    for ($i=0; $i < $qntdJgs; $i++) { 
        
    while(count($sort) < $qntdDezenas){
    if($qntdDezenas < 5 or $qntdDezenas > 15){
        print("Quantidade invalida");
        break;
    }else{
        $DezSort = rand(1, 80);
        if (!in_array($DezSort, $sort)){
            $sort[] = $DezSort;
        }
        }
    }
    
    
    sort($sort);
    
    foreach ($sort as $valor) {
        print "| $valor ";
    }

    $sort = [];
    print("\n");
} 
}

function Lotomania(){
    
    print("|          *LOTOMANIA*         |\n");
    print("================================\n");



    $sort = [];

    $qntdJgs = readline("|QUANTIDADE DE JOGOS:\n");
    $qntdDezenas = readline("|DIGITE 50 PARA GERAR:\n");

    for ($i=0; $i < $qntdJgs; $i++) { 
        
    while(count($sort) < $qntdDezenas){
    if($qntdDezenas != 50){
        print("Quantidade invalida");
        break;
    }else{
        $DezSort = rand(1, 100);
        if (!in_array($DezSort, $sort)){
            $sort[] = $DezSort;
        }
        }
    }
    
    
    sort($sort);
    
    foreach ($sort as $valor) {
        print "| $valor ";
    }

    $sort = [];
    print("\n");
}
}

function Lotofacil(){
   
    print("|          *LOTOFACIL*         |\n");
    print("================================\n");

    $sort = [];

    $qntdJgs = readline("|QUANTIDADE DE JOGOS:\n");
    $qntdDezenas = readline("|QUANTIDADE DE NUMEROS:\n");

    for ($i=0; $i < $qntdJgs; $i++) { 
        
    while(count($sort) < $qntdDezenas){
    if($qntdDezenas < 15 or $qntdDezenas > 20){
        print("Quantidade invalida");
        break;
    }else{
        $DezSort = rand(1, 25);
        if (!in_array($DezSort, $sort)){
            $sort[] = $DezSort;
        }
        }
    }
    
    
    sort($sort);
    
    foreach ($sort as $valor) {
        print "| $valor ";
    }

    $sort = [];
    print("\n");
}  
}
