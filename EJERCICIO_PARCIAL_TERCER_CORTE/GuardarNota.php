<?php
    include('conexion.php');

    if(isset($_POST['GuardarNota']))
    {
        $id = $_POST['id'];
        $est = $_POST['estudiante'];
        $mat = $_POST['materia'];
        $doc = $_POST['docente'];
        $pun = $_POST['nota'];

        $consulta = "INSERT INTO notas_estudiantes_materias(id, id_estudiante, id_materia, id_docente, puntaje) VALUES ('$id', '$est', '$mat', '$doc', '$pun')";
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
