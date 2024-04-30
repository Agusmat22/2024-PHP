<?php


require_once __DIR__ ."/../ejer-20-bis/gestorArchivo.php";
/*
     Aplicación No 21 ( Listado CSV y array de usuarios)
    Archivo: listado.php
    método:GET
    Recibe qué listado va a retornar(ej:usuarios,productos,vehículos,...etc),por ahora solo tenemos
    usuarios).
    En el caso de usuarios carga los datos del archivo usuarios.csv.
    se deben cargar los datos en un array de usuarios.
    Retorna los datos que contiene ese array en una lista

    <ul>
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
    </ul>
    Hacer los métodos necesarios en la clase usuario
 */


 if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    

    if(isset($_GET['listado']) && $_GET['listado'] === 'usuarios')
    {
        $usuarios = GestorArchivo::leerArchivo('../ejer-20-bis/data/registro.csv');


        $codeHTML = "<ul>";

        foreach ($usuarios as $key) {

            $codeHTML .= "<li>" . $key->getNombre() . "</li>";

        }

        $codeHTML .= "</ul>";
        
        echo $codeHTML ;

    }
    
    


 }