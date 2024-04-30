<?php

require_once __DIR__ ."/../ejer-20-bis/class/usuario.php";
require_once __DIR__ ."/../ejer-20-bis/gestorArchivo.php";
/*
Aplicación No 22 ( Login)
Archivo: Login.php
método:POST
Recibe los datos del usuario(clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder verificar si es un usuario registrado, Retorna
un :
“Verificado” si el usuario existe y coincide la clave también.
“Error en los datos” si esta mal la clave.
“Usuario no registrado si no coincide el mail“
Hacer los métodos necesarios en la clase usuario.
*/


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['password']) && isset($_POST['mail'])) {

        
        $usuarios = GestorArchivo::leerArchivo(__DIR__.'/../ejer-20-bis/data/registro.csv');

        $validateUser;
        foreach ($usuarios as $element) {
            
            if ($element->validarMail($_POST['mail'])) {

                if ($element->validarPass($_POST['password'])) {
                    $validateUser = $element;
                    echo "Validacion sastifactoria. <br/> Bienvenido: ".$validateUser->getNombre();
                }
                else {
                    echo "Error, password incorrecto";
                    $validateUser = false; //le agrego el valor para que contenga algo
                }

                break;
            }

        }

        if (!isset($validateUser)) {
            echo "Usuario no registrado";
        }

    
        
    }
    else {
        echo "NM ENTRER HOLA";

    }


}