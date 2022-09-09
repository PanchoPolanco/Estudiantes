<?php
    include('conexion.php');

    if(isset($_POST['EditarNota']))
    {    
        $id = $_POST['id2'];
        $est = $_POST['estudiante2'];
        $mat = $_POST['materia2'];
        $doc = $_POST['docente2'];
        $pun = $_POST['nota2'];

        $consulta = "UPDATE notas_estudiantes_materias N SET N.id_estudiante = '$est', N.id_materia = '$mat', N.id_docente = '$doc', N.puntaje = '$pun' WHERE N.id = '$id'";
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
      