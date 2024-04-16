<?php
/*
    Aplicación No 10 (Arrays de Arrays)
    Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
    contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
    Arrays de Arrays.

    PUNTO ANTERIOR

    Aplicación No 9 (Arrays asociativos)
    Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
    contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
    lapiceras.

*/

$arrayAsociativo["tipo1"] = array("color"=> array("Rojo", "Verde", "Violeta"), "marca"=> array("Faber Castel","Bic","Siux"), "trazo"=> array(1,2,3), "precio"=> array(100,20,500));
$arrayAsociativo["tipo2"] = array("color"=> array("Rojo", "Verde", "Violeta"), "marca"=> array("Castel","Trabi","Fix"), "trazo"=> array(10,20,30), "precio"=> array(300,20,600));
$arrayAsociativo["tipo3"] = array("color"=> array("Rojo", "Verde", "Violeta"), "marca"=> array("Faber","Lix","Kex"), "trazo"=> array(4,6,8), "precio"=> array(150,200,200));

$ind = 0;
foreach ($arrayAsociativo as $key => $value) 
{  
    echo strtoupper($key) ."<br/><br/>";

    for ($i=0; $i < 3; $i++) 
    { 


        foreach (array_keys($value) as $elementos) 
        {
            echo "$elementos: " .$value[$elementos][$i] . "<br/>";
            
        }
        echo "<br/> ------------------------- <br/>";
    }


}

?>