<?php
    /*
    Aplicación No 2 (Mostrar fecha y estación)
    Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
    distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
    año es. Utilizar una estructura selectiva múltiple. 
    */

    #Seteo la fecha con la de argentina
    date_default_timezone_set("America/Argentina/Buenos_Aires");

    $date = date("d-m-y");

    #echo "Fecha: ". $date;

    $month = date("m");
    
    
    $month = intval($month);

    
    if ($month > -1 && $month < 4) 
    {
        $season = "Verano";
    }
    else if ($month > 3 && $month < 7)
    {
        $season = "Otonio";

    }
    else if ($month > 6  && $month < 10)
    {
        $season = "Invierno";

    }
    else
    {
        $season = "Primavera";

    }

    echo "Fecha: ". $date;
    echo "<br />";

    echo "Estacion: ". $season



?>