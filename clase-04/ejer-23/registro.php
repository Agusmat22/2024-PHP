<?php 


/*
    Aplicación No 23 (Registro JSON)
    Archivo: registro.php
    método:POST
    Recibe los datos del usuario(nombre, clave,mail )por POST ,
    crea un ID autoincremental(emulado, puede ser un random de 1 a 10.000). crear un dato con la
    fecha de registro , toma todos los datos y utilizar sus métodos para poder hacer el alta (crear el objeto),
    guardando los datos en usuarios.json y subir la imagen al servidor en la carpeta
    Usuario/Fotos/.
    retorna si se pudo agregar o no.
    Cada usuario se agrega en un renglón diferente al anterior.
    Hacer los métodos necesarios en la clase usuario.
    (Hay que tener una referencia de la imagen para relacionarlo con el objeto)
*/

  #Seteo la fecha con la de argentina
  date_default_timezone_set("America/Argentina/Buenos_Aires");

if (isset($_GET['action'])) {

    switch ($_SERVER['REQUEST_METHOD']) {

        case 'POST':
                
            switch ($_GET['action']) {

                case 'register':


                    if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['mail']) && isset($_FILES['filePhoto'])) {
                        
                        require_once __DIR__ . '/class/user.php';
                        require_once __DIR__ . '/archivo.php';

                        $users = [];
     
                        if (file_exists(__DIR__ .'/data/users.json')) {
                            
                            $users = File::readUsers('/data/users.json'); 
                        }

                        $newUser = new User($_POST['name'],$_POST['mail'] ,$_POST['password'],date('Y-m-d H:i:s'),count($users)) ;
                        
                        $users[] = $newUser;
                        /*
                        if(File::saveFile(File::serializerUsers($users))){

                            echo "Registro exitoso";
                        }*/

                        File::moveFileClient("/photos", "filePhoto",$newUser->getId());
                    }
                    else{
                        echo "Error faltan parametros";
                    }
                    
                    break;
                
                default:
                    echo "Error, el param no existe";
                    break;
            }
            break;
        
        default:
            echo "Error, verbo no permitido";
            break;
    }
    
}
