<?php
    include('conexion.php');

    if(isset($_GET['id']))
    {
        $cod = $_GET['id'];

        $consulta = "DELETE FROM materias WHERE id  = $cod";
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