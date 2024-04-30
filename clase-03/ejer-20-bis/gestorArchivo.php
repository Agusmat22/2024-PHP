<?php

//LA MANERA QUE SOLUCIONA TODO
require_once __DIR__ . '/class/usuario.php';


class GestorArchivo{




    public static function leerArchivo($ruta){

        $archivo = fopen($ruta,"r");
        $usuarios = [];
        while (!feof($archivo)) {

            $linea = fgets($archivo);

            $arrayLinea = explode(";",$linea);

            $usuario = new Usuario($arrayLinea[0],$arrayLinea[1],$arrayLinea[2]);

            array_push($usuarios,$usuario);

        }

        fclose($archivo);
        return $usuarios;

    }


    public static function guardarArchivo($data,$ruta="./data/archivo.csv"){

        $archivo = fopen($ruta,"a");

        $result = fwrite($archivo,$data);

        fclose($archivo);

        return $result;
    }

}