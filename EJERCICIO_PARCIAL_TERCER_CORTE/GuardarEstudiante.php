<?php
    include('conexion.php');

    if(isset($_POST['GuardarEstudiante']))
    {
        $id = $_POST['id'];
        $nom = $_POST['nombre'];
        $gru = $_POST['grupo'];

        $consulta = "INSERT INTO estudiantes(id, nombre, grupo) VALUES ('$id', '$nom', '$gru')";
        $resul = mysqli_query($link, $consulta);

        if(!$resul)
        {
            die("error en el query.");
        }
        else
        {
            header('Location: GestionEstudiante.php');
        }

    }
