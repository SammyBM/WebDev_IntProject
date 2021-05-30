<?php
$servername = "localhost";
    $username = "oamcsfmbm";
    $password = "6895f9b69";
    $database = "tropa_21";

    //Mysqli
    $con = mysqli_connect($servername, $username, $password, $database);

    if(mysqli_connect_errno())
    {
        echo "No se puede conectar a la base de datos: ".mysqli_connect_error();
    }
    else
    {
        echo "Conectado a: ", $database, " por mysqli";
    }

    ?>