<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid cabeza">
        <a class="navbar-brand titulo" href="index.php">Colegio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active enlace" aria-current="page" href="#">General</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active enlace" href="CosultarNota.php">Consultar Nota</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active enlace" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Academico
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="GestionEstudiante.php">Gestión Estudiante</a></li>
                <li><a class="dropdown-item" href="GestionMateria.php">Gestión Materia</a></li>
                <li><a class="dropdown-item" href="GestionDocente.php">Gestión Docente</a></li>
                <li><a class="dropdown-item" href="GestionNota.php">Gestión Notas</a></li>
            </ul>
            </li>
        </ul>
        <form class="d-flex">
            <a href="#">Iniciar sesión</a>
            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button> -->
        </form>
        </div>
    </div>
    </nav>

