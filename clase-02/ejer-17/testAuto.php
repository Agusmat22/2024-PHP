<?php

/*
    Aplicación No 17 (Auto)
    Realizar una clase llamada “Auto” que posea los siguientes atributos

    privados: _color (String)
    _precio (Double)
    _marca (String).
    _fecha (DateTime)

    Realizar un constructor capaz de poder instanciar objetos pasándole como

    parámetros: i. La marca y el color.
    ii. La marca, color y el precio.
    iii. La marca, color, precio y fecha.

    Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble
    por parámetro y que se sumará al precio del objeto.
    Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
    por parámetro y que mostrará todos los atributos de dicho objeto.
    Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
    devolverá TRUE si ambos “Autos” son de la misma marca.
    Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
    de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
    la suma de los precios o cero si no se pudo realizar la operación.
    Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);

    En testAuto.php:
    ● Crear dos objetos “Auto” de la misma marca y distinto color.
    ● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
    ● Crear un objeto “Auto” utilizando la sobrecarga restante.

    ● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
    al atributo precio.
    ● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
    resultado obtenido.
    ● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
    no.
    ● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3,
    5) 
*/


require_once("./class/auto.php");
require_once("../ejer-18/garage.php");

date_default_timezone_set("America/Argentina/Buenos_Aires");

$auto1 = new Auto("Suzuki","Azul");    
$auto2 = new Auto("Suzuki","Verde");    

$auto3 = new Auto("Honda","Verde",45000);    
$auto4 = new Auto("BMW","Verde",19900.99); 

$auto5 = new Auto("Wabe","Verde",19900.99,date("d-m-y"));    


$garage = array($auto1,$auto2,$auto3,$auto4,$auto5);

/*
for ($i=0; $i < count($garage); $i++) { 

    if ($i == 0) {
        //muestro el importe sumado entre el primer objeto y el segundo
        $sumaTotal = Auto::add($garage[$i],$garage[$i + 1]);
        echo "Suma total: ". $sumaTotal ."\n";

        
        //comparar el primer auto con el segundo y el quinto e informarlos

        $validacion = $auto1->equals($garage[$i]) && $auto1->equals($garage[count($garage)-1]);

        echo $validacion ? "Los tres autos validados son iguales \n" : "No son iguales los autos validados \n";


    }
    else if ($i >= (count($garage) -3)) {
        //agrego impuesto a los ultimos tres
        $garage[$i]->agregarImpuesto(1500);
    }
  
    if (($i+1) % 2 != 0) 
    {

        echo "\n\n". Auto::mostrarAuto($garage[$i]);
        
    }
      

}  */

//TEst ejer-18

$garage = new Garage("Doctored",599.9,array($auto1,$auto3,$auto5));


$garage->remove($auto1);
var_dump($garage->mostrarGarage());
echo "<br> ----------------------------------------- <br>";

$garage->add($auto4);
var_dump($garage->mostrarGarage());




