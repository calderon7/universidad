<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
    
</head>

<body>
    <ul class="var nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: white">Datos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php" style="color: white">Formulario</a>
        </li>
    </ul>
    <section style="padding: 2.5vw;">
        <div style="text-align: center;">
            <?php
            include 'conexion.php';
            $query_conteo = mysqli_query($conexion, 'SELECT COUNT(*) FROM estudiantes WHERE IdMunicipio = 1');
            $conteo = mysqli_num_rows($query_conteo);
            echo '<span style="text:center"> Hay un total de ' . $conteo . ' estudiantes en Bucaramanga</span>';
            $query_f = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE Genero = 1");
            $conteo_f = mysqli_num_rows($query_f);
            echo '<br><span style="text:center"> Hay un total de ' . $conteo_f . ' estudiantes Mujeres</span>';
            ?>
        </div>

        <div class="container" style="padding-left: 0px;padding-right: 0px;color:#333">
            <div class="row">
                <div class="col-lg-12">
                    <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%; color:#333">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Municipio</th>
                                <th>Fecha nacimiento</th>
                                <th>Genero</th>
                                <th>Direccion</th>
                                <th>Activo</th>
                                <th>Hora registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php


                            $consulta = mysqli_query($conexion, "SELECT * FROM estudiantes INNER JOIN tiposmunicipios ON estudiantes.IdMunicipio = tiposmunicipios.IdMunicipio");
                            while ($reg = mysqli_fetch_array($consulta)) {

                            ?>

                                <tr>
                                    <td style="color:#333">
                                        <?php echo mb_strtoupper($reg['Nombres']); ?>
                                    </td>
                                    <td style="color:#333">
                                        <?php echo mb_strtoupper($reg['Apellidos']); ?>
                                    </td>
                                    <td style="color:#333">
                                        <?php echo mb_strtoupper($reg['Email']); ?>
                                    </td>
                                    <td style="color:#333">
                                        <?php echo mb_strtoupper($reg['Nombre']); ?>
                                    </td>
                                    <td style="color:#333">
                                        <?php echo mb_strtoupper($reg['FechaNacimiento']); ?>
                                    </td>
                                    <td style="color:#333">
                                        <?php
                                        if ($reg['Genero'] == 0) {
                                            echo mb_strtoupper('Masculino');
                                        } else {
                                            echo mb_strtoupper('Femenino');
                                        }
                                        ?>
                                    </td>
                                    <td style="color:#333">
                                        <?php echo mb_strtoupper($reg['Direccion']); ?>
                                    </td>
                                    <td style="color:#333">
                                        <?php
                                        if ($reg['SwActivo'] == 0) {
                                            echo mb_strtoupper('Si');
                                        } else {
                                            echo mb_strtoupper('No');
                                        }
                                        ?>
                                    </td>
                                    <td style="color:#333">
                                        <?php echo mb_strtoupper($reg['FechaHora']); ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Municipio</th>
                                <th>Fecha nacimiento</th>
                                <th>Genero</th>
                                <th>Direccion</th>
                                <th>Activo</th>
                                <th>Hora registro</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>