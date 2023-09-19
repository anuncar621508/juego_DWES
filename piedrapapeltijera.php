<?php

$jugar = 's';

do {
    $maquina = rand(0, 2);

    echo "Elige una de las opciones: \n 0.- Piedra \n 1.- Papel \n 2.- Tijeras \n";
    echo "";
    $usuario = trim(fgets(STDIN));

    $opciones = ['✊ Piedra', '✋ Papel', '✌ Tijeras'];


    if ($usuario < 0 or $usuario > 2) {
        echo "Por favor, introduce una opción válida (0, 1, 2).\n";
        continue;
    }

    echo "Has elegido: " . $opciones[$usuario] . "\n";
    echo "Tu oponente ha elegido: " . $opciones[$maquina] . "\n";

    if ($maquina == $usuario) {
        echo "Empate\n";
    } elseif (($maquina == 0 and $usuario == 1) or ($maquina == 1 and $usuario == 2) or ($maquina == 2 and $usuario == 0)) {
        echo "¡Enhorabuena, has ganado!\n";
    } else {
        echo "Has perdido\n";
    }

    echo "¿Quieres volver a jugar? (Introduce s si quieres seguir jugando): ";
    $jugar = (trim(fgets(STDIN)));

} while ($jugar == "S" or $jugar == "s");

echo "HASTA LA PRÓXIMA!!";

