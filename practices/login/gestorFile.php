<?php

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
}