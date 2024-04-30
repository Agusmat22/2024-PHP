<?php

include_once(__DIR__."/user.php");

class GestorFile{

    public static function saveFile($data,$path){

        $file = fopen($path,'w');

        $status = fwrite($file,$data);

        fclose($file);

        return $status;
    }

    public static function saveFileExist($data,$path){

        $file = fopen($path,'a');

        $status = fwrite($file,$data);

        fclose($file);

        return $status;
    }

    public static function readFileUsers($path){

        $file = fopen($path,'r');

        $arrayUsers = [];

        while (!feof($file)) {

            $data = fgets($file);

            $arrayData = explode('|',$data);

            $name = $arrayData[0];
            $password = $arrayData[1];  
            $mail = $arrayData[2];


            $arrayUsers[] = new User($name,$mail,$password);
        }

        return $arrayUsers;

        
    }
}