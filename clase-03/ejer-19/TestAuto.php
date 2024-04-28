<?php


include_once("./Auto.php");

//$auto1 = new Auto("Mercedez","verde",499.99);


if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {

    $autoCreado;


    if ( isset($_POST["marca"]) && isset($_POST["color"])) {

        if(isset($_POST["precio"]) && isset($_POST["fecha"]))
        {
            $autoCreado = new Auto($_POST["marca"],$_POST["color"] ,$_POST["precio"], new DateTime($_POST["fecha"]));
        }
        else if($_POST["precio"]){
            $autoCreado = new Auto($_POST["marca"],$_POST["color"] ,$_POST["precio"]);

        }
        else{
            $autoCreado = new Auto($_POST["marca"],$_POST["color"]);
        }

        Auto::altaVehiculo($autoCreado, "./data/autos.csv");
        echo "Alta completado " . PHP_EOL;

    }
    else {
        echo "Error, debe completar los parametros";
    }

    
 
}
else if ($_SERVER["REQUEST_METHOD"] === 'GET')
{
    $arrayLeido = Auto::leerArchivo("./data/autos.csv");

    foreach ($arrayLeido as $key => $value) {
        
        //echo Auto::mostrarAuto($value);

        if($key === 0)
        {
            $resultado = Auto::add($value,$arrayLeido[$key + 1]);
            
            echo "Precio de la suma: " .$resultado;
        }

        if(count($arrayLeido) - $key < 4)
        {
            $value->agregarImpuesto(1500);
        }
    }

    echo $arrayLeido[0]->equals($arrayLeido[1]) && $arrayLeido[0]->equals($arrayLeido[count($arrayLeido) -1]) ? PHP_EOL . "Son iguales los 3 vehiculos" : PHP_EOL .  "No son iguales los 3 vehiculas";
}



