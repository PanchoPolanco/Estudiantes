<?php
    include('conexion.php');

    if(isset($_POST['EditarEstudiante']))
    {    
        $cod = $_POST['id2'];
        $nom = $_POST['nombre2'];
        $gru = $_POST['grupo2'];

        $consulta = "UPDATE estudiantes SET  id = '$cod', nombre = '$nom', grupo = '$gru' WHERE id = '$cod'";
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
      