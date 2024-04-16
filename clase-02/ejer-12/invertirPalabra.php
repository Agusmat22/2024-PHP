<?php


/*Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”. */

//strlen() --> indica el largo de una cadena

function invertirWord($palabra)
{
    $palabraInvertida = "";

    for ($i= strlen($palabra) -1 ; $i > -1  ; $i--) 
    { 
        $palabraInvertida .= $palabra[$i];
    }

    return $palabraInvertida;
}

//$palabraInvert = invertirWord("Hola");

//echo $palabraInvert;

