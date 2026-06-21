<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "instituto_jtc"
);

if(!$conexion){
    die("Error de conexion");
}

?>