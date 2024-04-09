<?php 

/*
    Aplicación No 4 (Calculadora)
    Escribir un programa que use la variable $operador que pueda almacenar los símbolos
    matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
    símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
    resultado por pantalla.

 */

    $operador = array("+","-","/","*");

    $op1 = 10;
    $op2 = 52;

    foreach ( $operador as $op) 
    {
        
        switch ($op) {

            case '+':
                echo "Operacion Suma: " . $op1 + $op2;
                
                break;
            
            case '-':
                echo "Operacion Resta: " . $op1 - $op2;
                break;

            case '/':
                echo "Operacion Division: " . $op1 / $op2;
                break;

            default:
                # *
                echo "Operacion Multiplicacion: " . $op1 * $op2;

                break;
        }

        echo"<br />";

    }




?>