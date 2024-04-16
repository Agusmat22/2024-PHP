<?php

/*
    Aplicación No 13 (Invertir palabra)
    Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
    función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
    deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
    “Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán: 1 si la palabra
    pertenece a algún elemento del listado.
    0 en caso contrario.
*/

//obtendra la funcion de mi archivo anterior si es que no se llamo antes
require_once("../ejer-12/invertirPalabra.php");




function validarPalabra($palabra, $max)
{
    $keyWords = array("Programacion","Parcial","Programacion");




    if (in_array(ucfirst($palabra),$keyWords)) 
    {
        return 1;
    }
    else if(strlen($palabra) <= $max)
    {
       return true; 
    }
    else {
        return 0;
    }
}



function invertiPalabraX($palabra, $max)
{
    $estadoValidacion = validarPalabra($palabra, $max);

    if ($estadoValidacion === true) 
    {
        return invertirWord($palabra);
    }
    else {
        return $estadoValidacion;
    }
    
}


$resultado = invertiPalabraX("programacionn",10);

echo $resultado;    