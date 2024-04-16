<?php


/*
    Aplicación No 9 (Arrays asociativos)
    Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
    contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
    lapiceras.
*/


$lapicera["color"] = array("Rojo","Violeta","Azul");  
$lapicera["trazo"] = array(0.5,2,3);  
$lapicera["precio"] = array(199.99,200,1000);  

//count or sizeof es lo mismo. Te indican la cantidad de elementos

for ($i=0; $i < count($lapicera); $i++) 
{ 
    if (is_array($lapicera)) 
    {
        echo "Lapicera ".$i+1 ."<br/>";

        foreach(array_keys($lapicera) as $key)
        {
            echo "$key: ".$lapicera[$key][$i] ."<br/>";

        }

        echo "---------------------- <br/>";
    }
    
}

?>