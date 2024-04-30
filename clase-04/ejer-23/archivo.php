<?php

require_once __DIR__ ."/class/user.php";

class File{

    


    public static function saveFile($data,$path="/data/users.json"){

        $file = fopen(__DIR__.$path,'w');

        $status = fwrite($file,$data);

        fclose($file);

        return $status !== false ? true : false;
    }


    public static function serializerUsers($users){

        $userSerializers = array();

        foreach ($users as $user) {
            
            $userSerializers[] = [
                'name'=> $user->getNombre(),
                'email'=> $user->getMail(),
                'password'=> $user->getPassword(),
                'id'=> $user->getId(),
                'registro'=> $user->getRegistro(),
            ];

        }


        return json_encode($userSerializers);

    }


    public static function readUsers($path){

        $file = fopen(__DIR__.$path,'r');

        $data = fread($file,filesize(__DIR__.$path));

        $dataDeserializada = File::deserializerUsers($data);

        $users = File::becomeToUsers($dataDeserializada);

        return $users;
    }



    public static function deserializerUsers($json){

        return json_decode($json, true);

    }

    public static function becomeToUsers($data){


        $array = [];

        foreach ($data as $user) {
            
            $array[] = new User($user["name"],$user["email"],$user["password"],$user["registro"],$user["id"]);
        }


        return $array;



    }
}