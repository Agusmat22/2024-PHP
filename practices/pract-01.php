<?php
/*
    Aplicación No 9 (Arrays asociativos)
    Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
    contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
    lapiceras.

*/


//ARRAY ASOCIATIVOS
$lapicera["color"] = "rojo";$lapicera["marca"]="Bic";$lapicera["trazo"]=0.5;$lapicera["precio"]=2099.59;

$lapicera2 = array("color"=>"blue","marca"=>"Ezco","trazo"=>1.5,"precio"=>5499.10);

//ARRAY INDEXADOS
$markup = array(10,56,"hola",45777,"Tengo hambre");
$markup2[0] = 50; $markup2[1]=0; $markup2[5] = null; $markup2[3]=2;




var_dump($markup2[5]);



?>