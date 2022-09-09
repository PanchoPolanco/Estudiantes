<?php include("includes/header.php");?>

<div class="container">
    <br><br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#calificacion">
        REGISTRAR NOTA
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
                    <form action="GuardarNota.php" method="POST">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="id" placeholder="id">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Estudiante</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="estudiante" placeholder="id estudiante">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Materia</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="materia" placeholder="id materia">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Docente</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="docente" placeholder="id docente">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Puntaje</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="nota" placeholder="calificacion">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" name="GuardarNota" value="Registrar">Registrar</button>
                    </form>
                </div>

                 <!--Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>


    <div class="modal" id="edicionota">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <!-- Modal Header--> 
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body--> 
                <div class="modal-body">
                    <form action="EditarNota.php" method="POST">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="id2" placeholder="id">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Estudiante</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="estudiante2" placeholder="id estudiante">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Materia</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="materia2" placeholder="id materia">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Docente</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="docente2" placeholder="id docente">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Puntaje</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="nota2" placeholder="calificacion">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" name="EditarNota" value="Registrar">Registrar</button>
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
                <th>ID</th>
                <th>Estudiante</th>
                <th>Materia</th>
                <th>Docente</th>
                <th>Calificacion</th> 
                <th>Editar</th>
                <th>Eliminar</th>                                      
            </tr>
        </thead>

        <tbody>
            <?php 
                include("conexion.php");  

                $sqli = "SELECT (N.id)as codigo, (E.nombre)as estudiante, (M.nombre)as materia, (D.nombre)as profe, puntaje FROM estudiantes E join notas_estudiantes_materias N on(E.id = N.id_estudiante) join materias M on(M.id = N.id_materia) join docentes D on(D.id = N.id_docente)";
                $consul = mysqli_query($link, $sqli); 
            ?>

            <?php
                while($row = mysqli_fetch_array($consul)){    
            ?>
                <tr>
                    <th><?php  echo $row['codigo']?></th>
                    <th><?php  echo $row['estudiante']?></th>
                    <th><?php  echo $row['materia']?></th> 
                    <th><?php  echo $row['profe']?></th>  
                    <th><?php  echo $row['puntaje']?></th>
                    <th>
                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edicionota">Editar</a>
                    </th>
                    <th>
                        <a href="EliminarNota.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a>
                    </th>
                                                                                
                </tr>
            <?php 
                }
            ?>
        </tbody>
    </table> 
</div>




<?php include("includes/footer.php");?>