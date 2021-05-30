<?php

    $servername = "localhost";
    $username = "oamcsfmbm";
    $password = "6895f9b69";
    $database = "tropa_21";
    

    //PDO
    try
    {
        //Conexion a MySQL
        $cn = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
        echo "Conexion exitosa por PDO";
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    finally 
    {
        echo "<br>";
    }
    
?>