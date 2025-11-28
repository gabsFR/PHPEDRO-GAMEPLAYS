<?php

menu();

function menu(): void {

    $continue = true;

    do {
        print("|           *BIG-SHOT GAMBLING*         |\n");
        print("=========================================\n");
        print("[1] - Mega Sena - 6 a 20\n");
        print("[2] - Quina - 5 a 15\n");
        print("[3] - Lotomania - 50\n");
        print("[4] - Lotofacil - 15 a 20\n");
        print("[0] - Sair\n");
        print("Opção: ");

        $opcao = trim(readline(""));

        switch ($opcao) {
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
                print("Saindo...\n");
                $continue = false; 
                break;
            default:
                print("Opção inválida.\n");
                break;
        }

    } while ($continue);
}


function MegaSena() {

    print("|          *MEGA-SENA*          |\n");
    print("=================================\n");

    $qntdJgs = readline("|QUANTIDADE DE JOGOS: ");
    $qntdDezenas = readline("|QUANTIDADE DE NÚMEROS (6 a 20): ");

    if ($qntdDezenas < 6 || $qntdDezenas > 20) {
        print("Quantidade inválida!\n");
        return;
    }

    $valorAposta = calcularMega($qntdDezenas);
    $total = 0;

    for ($i = 0; $i < $qntdJgs; $i++) {

        $sort = [];

        while (count($sort) < $qntdDezenas) {
            $num = rand(1, 60);
            if (!in_array($num, $sort)) {
                $sort[] = $num;
            }
        }

        sort($sort);

        print("Aposta " . ($i + 1) . ": ");
        foreach ($sort as $valor) print "$valor ";

        print(" | VALOR: R$ " . number_format($valorAposta, 2, ',', '.') . "\n");

        $total += $valorAposta;
    }

    print("VALOR TOTAL GASTO: R$ " . number_format($total, 2, ',', '.') . "\n");
}

function calcularMega($qtd) {

    $valores = [
        6 => 5.00,
        7 => 35.00,
        8 => 140.00,
        9 => 420.00,
        10 => 1050.00,
        11 => 2310.00,
        12 => 4620.00,
        13 => 8580.00,
        14 => 15015.00,
        15 => 25025.00,
        16 => 40040.00,
        17 => 61880.00,
        18 => 92820.00,
        19 => 135660.00,
        20 => 193800.00,
    ];

    return $valores[$qtd];
}


function Quina() {

    print("|          *QUINA*         |\n");
    print("============================\n");

    $qntdJgs = readline("|QUANTIDADE DE JOGOS: ");
    $qntdDezenas = readline("|QUANTIDADE DE NÚMEROS (5 a 15): ");

    if ($qntdDezenas < 5 || $qntdDezenas > 15) {
        print("Quantidade inválida!\n");
        return;
    }

    $valorAposta = calcularQuina($qntdDezenas);
    $total = 0;

    for ($i = 0; $i < $qntdJgs; $i++) {

        $sort = [];

        while (count($sort) < $qntdDezenas) {
            $num = rand(1, 80);
            if (!in_array($num, $sort)) {
                $sort[] = $num;
            }
        }

        sort($sort);

        print("Aposta " . ($i + 1) . ": ");
        foreach ($sort as $valor) print "$valor ";

        print(" | VALOR: R$ " . number_format($valorAposta, 2, ',', '.') . "\n");

        $total += $valorAposta;
    }

    print("VALOR TOTAL GASTO: R$ " . number_format($total, 2, ',', '.') . "\n");
}

function calcularQuina($qtd) {
    $base = 2.50;
    return $base * ($qtd - 4);
}


function Lotomania() {

    print("|          *LOTOMANIA*         |\n");
    print("================================\n");

    $qntdJgs = readline("|QUANTIDADE DE JOGOS: ");

    $valorAposta = 3.00;
    $total = 0;

    for ($i = 0; $i < $qntdJgs; $i++) {

        $sort = [];

        while (count($sort) < 50) {
            $num = rand(0, 99);
            if (!in_array($num, $sort)) {
                $sort[] = $num;
            }
        }

        sort($sort);

        print("Aposta " . ($i + 1) . ": ");
        foreach ($sort as $valor) print "$valor ";

        print(" | VALOR: R$ " . number_format($valorAposta, 2, ',', '.') . "\n");

        $total += $valorAposta;
    }

    print("VALOR TOTAL GASTO: R$ " . number_format($total, 2, ',', '.') . "\n");
}


function Lotofacil() {

    print("|          *LOTOFACIL*         |\n");
    print("================================\n");

    $qntdJgs = readline("|QUANTIDADE DE JOGOS: ");
    $qntdDezenas = readline("|QUANTIDADE DE NÚMEROS (15 a 20): ");

    if ($qntdDezenas < 15 || $qntdDezenas > 20) {
        print("Quantidade inválida!\n");
        return;
    }

    $valorAposta = calcularLotofacil($qntdDezenas);
    $total = 0;

    for ($i = 0; $i < $qntdJgs; $i++) {

        $sort = [];

        while (count($sort) < $qntdDezenas) {
            $num = rand(1, 25);
            if (!in_array($num, $sort)) {
                $sort[] = $num;
            }
        }

        sort($sort);

        print("Aposta " . ($i + 1) . ": ");
        foreach ($sort as $valor) print "$valor ";

        print(" | VALOR: R$ " . number_format($valorAposta, 2, ',', '.') . "\n");

        $total += $valorAposta;
    }

    print("VALOR TOTAL GASTO: R$ " . number_format($total, 2, ',', '.') . "\n");
}

function calcularLotofacil($qtd) {

    $valores = [
        15 => 3.00,
        16 => 48.00,
        17 => 408.00,
        18 => 2440.00,
        19 => 11628.00,
        20 => 46512.00,
    ];

    return $valores[$qtd];
}
