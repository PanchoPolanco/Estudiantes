<?php include("conexion.php");?>
<?php include("includes/header.php");?>

<div class="container">
    <br><br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModald">
        NUEVO
    </button>

    <div class="modal" id="myModald">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <!-- Modal Header--> 
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body--> 
                <div class="modal-body">
                    <form action="GuardarDocente.php" method="POST">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Código</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="id" placeholder="id">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombre" placeholder="nombre">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Materia</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="materia" placeholder="id_materia">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success" name="GuardarDocente" value="Registrar">Registrar</button>
                    </form>
                </div>

                 <!--Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>



    <div class="modal" id="myModalEditd">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                
                <div class="modal-body">
                    <form action="EditarDocente.php" method="POST">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Código</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="id2" placeholder="id">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombre2" placeholder="nombre">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Materia</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="materia2" placeholder="id_materia">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-secondary"  name="EditarDocente" value="Editar">Editar</button>
                    </form>
                </div>

                 
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>



<div class="container mt-5">
    <table class="table table-hover" >
        <thead class="table-success table-striped" >
            <tr>
                <th>ID</th>
                <th>Nombre</th> 
                <th>Materia</th>
                <th>Editar</th>
                <th>Eliminar</th>                                      
            </tr>
        </thead>

        <tbody>
            <?php 
                include("conexion.php");  

                $sql = "SELECT D.id, D.nombre, (M.nombre)as nom FROM docentes D join materias M on(D.id_materia = M.id)";
                $query = mysqli_query($link, $sql);
            ?>

            <?php
                while($row = mysqli_fetch_array($query)){    
            ?>
                <tr>
                    <th><?php  echo $row['id']?></th>
                    <th><?php  echo $row['nombre']?></th>
                    <th><?php  echo $row['nom']?></th>
                    <th>
                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModalEditd">Editar</a>
                    </th>
                    <th>
                        <a href="EliminarDocente.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                    </th>
                                                                                
                </tr>

            <?php 
                }
            ?>
        </tbody>
    </table> 
</div>


<?php include("includes/footer.php");?>