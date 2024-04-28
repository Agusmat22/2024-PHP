<?php 

require_once(__DIR__."/gestorFile.php");


$user;
$password;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Get the JSON data sent from JavaScript
    $jsonData = file_get_contents('php://input');

    // Decode the JSON data into an associative array
    $data = json_decode($jsonData, true);

    // Access the data fields using keys
    $username = $data['user'];
    $password = $data['password'];
    $email = $data['email'];


    // Process the data as needed
    // For example, you can validate and sanitize the data, then perform database operations

    if (isset($username) && isset($password) && isset($email)) {
        
        $mensaje = "$username | $password\n";
        GestorFile::saveFileExist($mensaje,'./data/users.txt');
        echo "Exitoso el registro";
    }

} 
