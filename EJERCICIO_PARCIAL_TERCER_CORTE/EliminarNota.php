<?php
    include('conexion.php');

    if(isset($_GET['id']))
    {
        $cod = $_GET['id'];

        $consulta = "DELETE FROM notas_estudiantes_materias WHERE id  = '$cod'";
        $resul = mysqli_query($link, $consulta);

        if(!$resul)
        {
            die("error en el query.");
        }
        else
        {
            header('Location: GestionNota.php');
        }

    }