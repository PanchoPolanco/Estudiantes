<?php
    include('conexion.php');

    if(isset($_POST['GuardarMateria']))
    {
        $id = $_POST['id'];
        $nom = $_POST['nombre'];

        $consulta = "INSERT INTO materias(id, nombre) VALUES ('$id', '$nom')";
        $resul = mysqli_query($link, $consulta);

        if(!$resul)
        {
            die("error en el query.");
        }
        else
        {
            header('Location: GestionMateria.php');
        }

    }