<?php
    include('conexion.php');

    if(isset($_POST['EditarDocente']))
    {    
        $cod = $_POST['id2'];
        $nom = $_POST['nombre2'];
        $mate = $_POST['materia2'];

        $consulta = "UPDATE docentes SET  id = '$cod', nombre = '$nom', id_materia = '$mate' WHERE id = '$cod'";
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