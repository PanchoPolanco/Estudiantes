<?php
    include('conexion.php');

    if(isset($_GET['id']))
    {
        $cod = $_GET['id'];

        $consulta = "SELECT (E.nombre)as estudiante, (M.nombre)as materia, (D.nombre)as docente, puntaje FROM estudiantes E join notas_estudiantes_materias N on(E.id = N.id_estudiante) join materias M on(M.id = N.id_materia) join docentes D on(D.id = N.id_docente) where E.id = '$id'";
        $resul = mysqli_query($link, $consulta);

        if(!$resul)
        {
            die("error en el query.");
        }
        else
        {
            header('Location: CosultarNota.php');
        }
    }

?>
