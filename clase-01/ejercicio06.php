<?php

/*
//implode me permite separar cada elemento del array con el caracter que deseemos y mostrarlo
echo implode(", ", $arrayNumber);*/

/*
Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.
*/

$arrayNumber;

//agrego los cinco numeros

for($i=0; $i<5; $i++ )
{
    $arrayNumber[$i] = rand(1,10);
}

//echo implode(",", $arrayNumber);

$promedio = 0;

for ($i=0; $i < count($arrayNumber); $i++) 
{ 

    $promedio+=$arrayNumber[$i];
}

$promedio = $promedio / count($arrayNumber); 

if ($promedio > 6) {
    echo "El promedio es mayor a 6";
}
else if ($promedio == 6) {
    echo "El promedio es igual a 6";
}
else {
    echo "El promedio es menor a 6";
}

echo "<br/>";
echo "PROMEDIO: $promedio";
?>
