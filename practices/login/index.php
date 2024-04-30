<?php 

require_once(__DIR__."/gestorFile.php");

//NO FUNCIONA ESTO


$users;

if (file_exists(__DIR__."/data/users.txt")) {

    $users = GestorFile::readFileUsers(__DIR__."/data/users.txt");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    if ($_POST['action'] === 'register') {

        // Access the data fields using keys
        $username = $_POST['user'];
        $password = $_POST['password'];
        $mail = $_POST['mail'];


        // Process the data as needed
        // For example, you can validate and sanitize the data, then perform database operations

        if (isset($username) && isset($password) && isset($mail)) {
            
            $mensaje = "$username | $password | $mail".PHP_EOL;
            GestorFile::saveFileExist($mensaje,'./data/users.txt');
            echo "Exitoso el registro";
        }

    }
    else if ($_POST['action'] === "join") {
        
        if (isset($users)) {

        }
        else{
            echo "Error, el usuario no es valido";

        }
    }



} 
