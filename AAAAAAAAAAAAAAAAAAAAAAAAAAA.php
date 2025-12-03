<?php

$estudantes = [];

$cpf = '11436353963';
$estudantes[$cpf]['nome'] = 'Caio';
$estudantes[$cpf]['idade'] = 15;
$estudantes[$cpf]['comidas'] = ['macorronauda', 'strogomof'];


$cpf = '67';
$estudantes[$cpf]['nome'] = 'Adriel';
$estudantes[$cpf]['idade'] = 15;
$estudantes[$cpf]['comidas'] = ['custela', 'suco do stilitorilo'];

foreach($estudantes as $estudante){
    
    foreach ($estudante as $informacao) {
        print_r($informacao);
        print "\n";
    }
        print "\n---------------------------\n";

}
