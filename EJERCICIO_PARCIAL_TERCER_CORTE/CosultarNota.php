<?php include("includes/header.php");?>

<div class="container">
    <br><br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#calificacion">
        Consultar
    </button>
</div>

    <div class="modal" id="calificacion">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <!-- Modal Header--> 
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body--> 
                <div class="modal-body">
                    <form action="ConsultarNota.php" method="POST">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="id" placeholder="id">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" value="Registrar" >Registrar</button>
                    </form>
                </div>

                 <!--Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>


<div class="container mt-5">
    <table class="table table-hover" >
        <thead class="table-success table-striped" >
            <tr>
                <th>Estudiante</th>
                <th>Materia</th>
                <th>Docente</th>
                <th>Calificacion</th>                                     
            </tr>
        </thead>

        <tbody>
            <?php 
                include("conexion.php");  

                $cod = 'id';

                $sqli = "SELECT (E.nombre)as estudiante, (M.nombre)as materia, (D.nombre)as docente, puntaje FROM estudiantes E join notas_estudiantes_materias N on(E.id = N.id_estudiante) join materias M on(M.id = N.id_materia) join docentes D on(D.id = N.id_docente) where E.id = '$cod'";
                $consulta = mysqli_query($link, $sqli); 
            ?>

            <?php
                while($row = mysqli_fetch_array($consulta)){    
            ?>
                <tr>
                    <th><?php  echo $row['estudiante']?></th>
                    <th><?php  echo $row['materia']?></th>  
                    <th><?php  echo $row['docente']?></th> 
                    <th><?php  echo $row['puntaje']?></th>                                                     
                </tr>
            <?php 
                }
            ?>
        </tbody>
    </table> 
</div>


<?php include("includes/footer.php");?>