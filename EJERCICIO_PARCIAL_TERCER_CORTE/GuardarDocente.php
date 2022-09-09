<?php
    include('conexion.php');

    if(isset($_POST['GuardarDocente']))
    {
        $id = $_POST['id'];
        $nom = $_POST['nombre'];
        $mate = $_POST['materia'];

        $consulta = "INSERT INTO docentes(id, nombre, id_materia) VALUES ('$id', '$nom', '$mate')";
        $resul = mysqli_query($link, $consulta);

        if(!$resul)
        {
            die("error en el query.");
        }
        else
        {
            header('Location: GestionDocente.php');
        }

    }