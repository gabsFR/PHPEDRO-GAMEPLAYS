<?php

$nome = readline("Digite seu nome: ");
$fimname = mb_strpos($nome, " ");
$firstname = mb_substr($nome, 0 , $fimname);
$A = str_ireplace("a", "@", $nome);

print mb_strlen($nome) . "\n";
print strtoupper($nome). "\n";
print strtolower($nome). "\n";
print ($firstname). "\n";
print ($A);
