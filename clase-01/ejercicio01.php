<?php 
    /*
    Aplicación No 1 (Sumar números)
    Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
    supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
    se sumaron.
    */
    
    $numeros = 0;
    $suma = 0;

    while ($suma < 100)
    {
        $numeros++;
        $suma += $numeros;
    }
    

    #con el . concatenamos una cadena
    echo "El ultimo numero es: " . $numeros;
    echo "<br />"; #salto de linea
    echo "La suma es de: " . $suma;

    #Se puede omitir el ' simbolo de cierre ' ya que se entiende que es un archivo PHP
?> 