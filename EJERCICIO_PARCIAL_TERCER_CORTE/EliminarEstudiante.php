<?php
    include('conexion.php');

    if(isset($_GET['id']))
    {
        $cod = $_GET['id'];

        $consulta = "DELETE FROM estudiantes WHERE id  = '$cod'";
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