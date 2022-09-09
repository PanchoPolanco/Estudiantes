<?php
    include('conexion.php');

    if(isset($_POST['EditarMateria']))
    {    
        $cod = $_POST['id2'];
        $nom = $_POST['nombre2'];

        $consulta = "UPDATE materias SET nombre = '$nom' WHERE id = '$cod'";
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
      