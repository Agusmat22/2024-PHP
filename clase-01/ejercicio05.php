<?php
    /*
    Aplicación No 5 (Números en letras)
    Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
    por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
    entre el 20 y el 60.
    Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”. */

    $num = 48;
    $num = strval( $num );

    $message = "";

    $numberPosZero = array(2 => "veinte",3=>"treinta",4=>"cuarenta",5=>"cincuenta",6=>"sesenta");
    $numberPosOne = array(2 => "dos",3=>"tres",4=>"cuatro",5=>"cinco",6=>"seis",7=>"siete",8=>"ocho",9=>"nueve");


    foreach( $numberPosZero as $key => $value )
    {
        if (intval($num[0]) === $key) {

            $message .= $value;
            
            foreach( $numberPosOne as $key2 => $value2 ) {

                if (intval($num[1]) === $key2) {
                    $message .= " y ". $value2;
                    break;
                }


            }

            break;


        }
    }

    echo "Numero seleccionado: " .$message;



?>