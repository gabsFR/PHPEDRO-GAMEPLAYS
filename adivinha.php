<?php

$chute = 0;
$sorteado = rand(1, 50);
$vidas = 5;
$points = 1000;

print("Voce tem $vidas vidas.\n");

while($chute != $sorteado && $vidas != 0) {

    $chute = (int) readline("digite um numero: ");

    if ($chute == $sorteado)
{
    print("\033[32mVOCE GANHOU\033[0m\n");
    print("SOBRARAM $vidas VIDAS E VOCE FEZ $points PONTOS\n");
    
} else {
    
    if ($chute > $sorteado) {
            print("Valor muito alto! voce perdeu uma vida\n");
            $vidas = $vidas - 1;
            $points = $points - 100;
            print("voce tem $vidas sobrando\n");
    } else {
            print("Valor muito baixo! voce perdeu uma vida\n");
            $vidas = $vidas - 1;
             $points = $points - 100;
            print("voce tem $vidas sobrando\n");

    }

}

if($vidas == 0){
    print("\n\033[31mTUNÉ NADA OTARIO! TUNÉ NADA!\nvoce perdeu.\033[0m");
}
}
?>
