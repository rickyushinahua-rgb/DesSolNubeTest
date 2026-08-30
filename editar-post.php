<?php

include("conexion.php");
$con = conexion();

$id = $_POST["id"];
$doc = $_POST["doc"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$dir = $_POST["dir"];
$cel = $_POST["cel"];

$sql = "UPDATE persona 
        SET documento='$doc',
            nombre='$nom',
            apellido='$ape',
            direccion='$dir',
            celular='$cel'
        WHERE idpersona='$id'";

pg_query($con, $sql);

header("location:listar.php");

?>