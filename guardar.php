<?php

include("conexion.php");

if(isset($_POST['guardar'])){

    $nombre = $_POST['nombre'];
    $especialidad = $_POST['especialidad'];
    $jornada = $_POST['jornada'];

    $foto = $_FILES['foto']['name'];
    $ruta = $_FILES['foto']['tmp_name'];

    $destino = "docentes/" . $foto;

    move_uploaded_file($ruta, $destino);

    $guardar = "INSERT INTO docentes(nombre, especialidad, jornada, foto)
    VALUES('$nombre','$especialidad','$jornada','$foto')";

    $resultado = mysqli_query($conexion, $guardar);

    if($resultado){

        echo "
        <script>
            alert('Docente guardado correctamente');
            window.location='index.php';
        </script>
        ";

    }else{

        echo "
        <script>
            alert('Error al guardar');
            window.location='index.php';
        </script>
        ";

    }

}

?>