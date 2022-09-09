<?php
    include('conexion.php');

    if(isset($_GET['id']))
    {
        $cod = $_GET['id'];

        $consulta = "DELETE FROM docentes WHERE id  = '$cod'";
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