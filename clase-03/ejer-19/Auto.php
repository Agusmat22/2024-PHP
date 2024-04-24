<?php

/*
Aplicación No 19 (Auto)
Realizar una clase llamada “Auto” que posea los siguientes atributos

privados: _color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como

parámetros: i. La marca y el color.

ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.

Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
parámetro y que se sumará al precio del objeto.

Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto” por
parámetro y que mostrará todos los atributos de dicho objeto.

Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo devolverá
TRUE si ambos “Autos” son de la misma marca.

Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son de la
misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con la suma de los
precios o cero si no se pudo realizar la operación.

Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
Crear un método de clase para poder hacer el alta de un Auto, guardando los datos en un archivo
autos.csv.
Hacer los métodos necesarios en la clase Auto para poder leer el listado desde el archivo
autos.csv
Se deben cargar los datos en un array de autos.
En testAuto.php:
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio. 
● Crear un objeto “Auto” utilizando la sobrecarga restante.
● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500 al
atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3, 5)
*/


//ME FALTA TERMINARLO
class Auto{

    private $_marca; 
    private $_color;    
    private $_precio;
    private $_fecha;


    public function __construct($marca = "generic",$color = "generic", $precio=0, $fecha=new DateTime("1111-11-11")){

        $this->_marca = $marca;
        $this->_color = $color;
        $this->_precio = $precio;   
        $this->_fecha = $fecha;
    }

    
    public function agregarImpuesto($impuesto){

        $this->_precio += $impuesto;
    }

    public static function mostrarAuto($auto){

        return  $auto->_marca . " - " . $auto->_color . " - "  . $auto->_precio . " - " . $auto->_fecha->format("Y-m-d");
    }

    public function equals($auto){

        return $this->_marca == $auto->_marca;
    }

    public static function add($auto1,$auto2){

        if ($auto1->equals($auto2) && $auto1->getColor() === $auto2->getColor()) {
            return $auto1->getPrecio() + $auto2->getPrecio();
        }
        else {
            return 0;
        
        }
    }

    public static function altaVehiculo($auto,$ruta){

        if(isset($auto))
        {
            //"./data/vehiculosRegistrados.txt"
            $archivo = fopen($ruta,"a");

            $cantidadBytes = fwrite($archivo,Auto::mostrarAuto($auto));

            fclose($archivo);

            return $cantidadBytes;
        }
    }

    public static function leerArchivo($ruta){

        $archivo = fopen($ruta,"r");
        $autos = [];

        while (!feof($archivo)) {

            $linea = fgets($archivo,filesize($ruta));

            $elementos = explode(" - ",$linea);

            if (count($elementos) > 1) {

                $marca = $elementos[0];
                $color = $elementos[1];
                $precio = $elementos[2];
                $fecha = $elementos[3];

                array_push($autos,new Auto($marca, $color, $precio, new DateTime( $fecha )));
            }

            
        }

        
        fclose($archivo);

        return $autos;
    }


    //get y set

    public function getMarca(){
        
        return $this->_marca;
    }

    public function getColor(){
        
        return $this->_color;
    }

    public function getPrecio(){
        
        return $this->_precio;
    }

    public function getFecha(){
        
        return $this->_fecha;
    }


}