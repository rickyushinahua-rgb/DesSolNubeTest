<?php

    function conexion (){

    $host = "host=dpg-da7fkqhsrm7s738ci0h0-a";
    $port = "port=5432";
    $dbname = "dbname=test_db_e3z8";
    $user = "user=test_db_e3z8_user";
    $password = "password=ydCiHsbJ1OKRwpHvEr7SqLEOQSpvHgq1";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
    }
?>