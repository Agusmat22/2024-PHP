<?php

/*
Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
utilizando las estructuras while y foreach.
*/




$arrayNumber = array();

for ($i=0; count($arrayNumber) < 10; $i++) { 
    
    if($i % 2 !== 0)
    {
        //array push es un metodo que permite agregar elementos a un array. Primer parametro el array, segundo es el elemento
        array_push($arrayNumber, $i);
    }
}

echo"NUMEROS IMPARES MOSTRADO CON UN WHILE";
echo"<br/>";

$vueltas = 0;
while ($vueltas < count($arrayNumber) ) {
    
    echo "<br/>";
    echo "$arrayNumber[$vueltas]";
    $vueltas++;
    
}

echo "<br/>";

echo"NUMEROS IMPARES MOSTRADO CON UN FOREACH";
echo"<br/>";

foreach ($arrayNumber as $number) {
    
    echo "<br/>";
    echo "$number";
    $vueltas++;
    
}

function showName(int $name)
{
    echo "$name";
}

//showName("agustin");
?>