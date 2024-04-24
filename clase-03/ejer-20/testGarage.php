<?php



include_once('./Autogarage.php');
include_once('../ejer-19/Auto.php');

$auto1 =  new Auto("Mercedes","Rojos" ,5555 , new DateTime('2000-10-10'));
$auto2 =  new Auto("Mercedes","Rojos" ,5555 , new DateTime('2000-10-10'));
$auto3 =  new Auto("Fiat","Rojos" ,1100 , new DateTime('2020-01-10'));


$garage; 


if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    if (isset($_POST["marca"]) && isset($_POST["precio"])) {
        

        $garage = new Garage($_POST["marca"],(int)$_POST["precio"]);
    }
    else{
        echo "Sin exito";

    }
    
}

$garage->add($auto1);
$garage->add($auto2);
$garage->add($auto3);

//echo "Cars amount: " . count($garage->getAutos()) . "<br/>";

$garageCargado = Garage::cargarGarage();


echo  $garageCargado->mostrarGarage()  ;



/*
$garage->remove($auto3);    
$garage->remove($auto1);    
echo "Cars amount: " . count($garage->getAutos());*/

