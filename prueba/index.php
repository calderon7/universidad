<?php
include 'conexion.php';
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $municipio = $_POST['municipio'];
    $nacimiento = $_POST['nacimiento'];
    $genero = $_POST['genero'];
    $direccion = $_POST['direccion'];
    $activo = $_POST['activo'];

    $query = mysqli_query($conexion, "INSERT INTO estudiantes(Nombres, Apellidos, Email, FechaNacimiento, Genero, Direccion, SwActivo, IdMunicipio) VALUES ('$nombre','$apellido','$correo','$nacimiento','$genero','$direccion','$activo','$municipio')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <ul class="var nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="consulta.php" style="color: white">Datos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white">Formulario</a>
        </li>
    </ul>
    <section class="formulario">
        <form class="row g-3 needs-validation" novalidate action="index.php" method="post">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="validationCustom02" name="apellidos" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Correo</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="correo" required>
                    <div class="invalid-feedback">
                        Por favor ingrese su correo.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Municipio</label>
                <select class="form-select" id="validationCustom03" name="municipio" required>
                    <option selected disabled value="">Elija</option>
                    <?php
                    $consulta = $conexion->query("SELECT * FROM tiposmunicipios");
                    while ($select = $consulta->fetch_assoc()) {
                        echo '<option value="' . $select['IdMunicipio'] . '">' . $select['Nombre'] . '</option>';
                    }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Por favor escoja su municipio.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Fecha nacimiento</label>
                <input type="date" class="form-control" id="validationCustom04" name="nacimiento" required>
                <div class="invalid-feedback">
                    Por favor escoja su fecha de nacimiento.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Genero</label>
                <select class="form-select" id="validationCustom05" name="genero" required>
                    <option selected disabled value="">Elija</option>
                    <option value="0">Masculino</option>
                    <option value="1">Femenino</option>
                </select>
                <div class="invalid-feedback">
                    Por favor escoja su genero.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom06" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="validationCustom06" name="direccion" required>
                <div class="invalid-feedback">
                    Por favor ingrese su direccion.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom07" class="form-label">Activo en la carrera</label>
                <select class="form-select" id="validationCustom07" name="activo" required>
                    <option selected disabled value="">Elija</option>
                    <option value="0">Si</option>
                    <option value="1">No</option>
                </select>
                <div class="invalid-feedback">
                    Por elija su estado en la carrera.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" value="submit" name="submit" type="submit">Enviar</button>
            </div>
        </form>
    </section>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>