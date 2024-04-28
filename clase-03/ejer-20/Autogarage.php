<?php

/*
Aplicación No 20 (Auto - Garage)
Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)
Realizar un constructor capaz de poder instanciar objetos pasándole como

parámetros: i. La razón social.
ii. La razón social, y el precio por hora.

Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y que
mostrará todos los atributos del objeto.

Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un objeto de
tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.

Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage” (sólo si el
auto no está en el garaje, de lo contrario informarlo).

Ejemplo: $miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo).
 Ejemplo:
$miGarage->Remove($autoUno);
Crear un método de clase para poder hacer el alta de un Garage y, guardando los datos en un archivo
garages.csv.
Hacer los métodos necesarios en la clase Garage para poder leer el listado desde el archivo
garage.csv
Se deben cargar los datos en un array de garage.
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los
métodos.

*/

//include_once("./clase-03/ejer-19/Auto.php");

class Garage{

    private $_razonSocial;
    private $_precioPorHora;
    private $_autos;

    public function __construct($razonSocial,$precioPorHora = 0,$autos = []){
        $this->_razonSocial = $razonSocial;
        $this->_precioPorHora = $precioPorHora;
        $this->_autos = $autos;
    }

    public function mostrarGarage(){

        $texto = "";
        $texto .="Razon social: ". $this->_razonSocial. PHP_EOL . "Precio por hora: " . $this->_precioPorHora . PHP_EOL . "Autos: " ;


        foreach ($this->_autos as $key => $value) {
            
           $texto .= Auto::mostrarAuto($value) . ";";
        }


        return $texto;
    }

    public function equals($auto){
      
        foreach ($auto as $key => $value) {

            if ($value->equals($auto)) {
                return true;
            }

        }

        return false;
        
    }

    public function add($auto){

        if (!$this->equals($auto)) {
            
            array_push($this->_autos, $auto);
        }
    }


    public function remove($auto){

        $index = array_search($auto,$this->_autos);

        //borro un solo elemento
        array_splice($this->_autos, $index,1);

        return is_int($index) ? true : false;

    }

    public static function altaGarage($garage,$ruta){

        $archivo = fopen($ruta,'w');

        $status = fwrite($archivo,$garage->mostrarGarage());

        fclose($archivo);

        return $status !== false ? true : false;
    }

    public static function leerArchivo($ruta){

        $archivo = fopen($ruta, 'r');
        $array = [];

        while (!feof($archivo)) {
            
            $line = explode(':', fgets($archivo));

            if ($line[0] === "Autos") {

                $autos = explode(';', $line[1]);
                $autosCasteados = [];

                foreach ($autos as $key => $value) {
                    
                    //le coloco -1 porque sino me cuenta un espacio en blanco del archivo y lo lee como un elemento
                    if ($key < count($autos) -1) {
                        $elemt = explode(' - ', $value);

                        array_push($autosCasteados, new Auto($elemt[0],$elemt[1],$elemt[2],new DateTime($elemt[3])));
                    }
                    
                }

                $array[$line[0]] = $autosCasteados;
            }
            else{

                $array[$line[0]] = $line[1];
            }


        }

        fclose($archivo);   

        return $array;
         
    }


    public static function cargarGarage(){

        $dataGarage = Garage::leerArchivo("./data/garage.csv");

        return new Garage($dataGarage["Razon social"],$dataGarage["Precio por hora"],$dataGarage["Autos"]);

    }


    public function getAutos(){
        return $this->_autos;
    }

    public function setAutos($autos){
         $this->_autos = $autos;
    }
}