<?php

/*

Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)
Realizar un constructor capaz de poder instanciar objetos pasándole como

parámetros: i. La razón social.
ii. La razón social, y el precio por hora.

Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
que mostrará todos los atributos del objeto.
Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
(sólo si el auto no está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). Ejemplo:
$miGarage->Remove($autoUno);
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos
los métodos.

*/

class Garage{

    private $_razonSocial;
    private $_precioPorHora;
    private $_autos;

    public function __construct($razonSocial,$precioPorHora=0,$autos=[]){

        $this->_razonSocial = $razonSocial;
        $this->_precioPorHora = $precioPorHora;
        $this->_autos= $autos;
    }

    function mostrarGarage(){

        return "Razon social: " . $this->_razonSocial . "<br/>" . "Precio por hora: ". $this->_precioPorHora . ".<br/>" . "Cantidad de autos: " . count($this->_autos);;
    }

    function equals($auto){

        foreach ($this->_autos as $element) {

            if ($element->equals($auto)) return true; 
            
        }


        return false;
    }


    function add($auto)
    {
        foreach ($this->_autos as $element) {
            
            if ($element->equals($auto)) {
                
                return false;

            }

        }

        array_push($this->_autos,$auto);
        return true;
    }

    
    function remove($autoElimnar)
    {
        $this->_autos = array_filter($this->_autos, function($auto) use ($autoElimnar) {

            return $auto->equals($autoElimnar) === false;
        });

        
    }
}