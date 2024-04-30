<?php

require_once("./gestorArchivo.php");
require_once("./class/usuario.php");

/*
Aplicación No 20 BIS (Registro CSV)
Archivo: registro.php
método:POST
Recibe los datos del usuario(nombre, clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.csv.
retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
Hacer los métodos necesarios en la clase usuario
*/

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    
    if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['password'])) {

        $usuario = new Usuario($_POST['nombre'], $_POST['email'], $_POST['password']);
        
        $data = trim($_POST['nombre']) . ";" . trim($_POST['email']) . ";" . trim($_POST['password']) . PHP_EOL;

        GestorArchivo::guardarArchivo($data,"./data/registro.csv");

        echo $usuario->mostrar();

        $leer = GestorArchivo::leerArchivo("./asdads/");

        
    }
}