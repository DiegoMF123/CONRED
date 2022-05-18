<!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>CONRED Personal</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/conredIco.ico">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" />
    <script src="https://kit.fontawesome.com/63c2368222.js" crossorigin="anonymous"></script>
    <style type="text/css">
        .texto-justificado {
            text-align: justify;
        }
    </style>
    <style type="text/css">
        table {
            background-color: #EAEDED;
            border: 1px solid black;
            width: 100%;
        }

        .normal th,
        .normal td {
            border: 1px solid #000;
        }

        table thead {
            color: #fff;
            background-color: #0574F1;
        }
    </style>
</head>

<body class="is-preload">

    <!-- Content -->
    <div id="content">
        <div class="inner">

            <!-- Post -->
            <article class="box post post-excerpt">
                <header>

                    <h2>Personal <i class="fa-solid fa-users"></i></h2>
                    <p class="texto-justificado">CONRED</p>
                </header>
                <div class="info">

                </div>
                <center>
                    <img src="<?php echo base_url(); ?>assets/images/personal.png" width="300" />
                </center>

            </article>

            <!-- Post -->
            <article class="box post post-excerpt">
                <header>
                    <p class="texto-justificado">CONRED - Información de contacto -</p>
                    <br />
                    <div class="panel-body">
                        <table class="normal">
                            <?php
                            $direccion = "";
                            //  echo $usuario->nombre_archivo."<br>";

                            $direccion =  base_url() . "index.php/personal/mostrarPersonal";


                            ?>
                            <a href="<?php echo base_url(); ?>index.php/reporte/reportePersonal"><button type="button">Descargar personal Excel <i class="fa-solid fa-file-excel"></i></button></a>
                            <br />
                            <br />
                            <a href="<?php echo $direccion; ?>"><button type="button">Descargar personal PDF <i class="fa-solid fa-file-pdf"></i></button></a>
                            <br />
                            <br />
                            <thead>

                                <tr>
                                    <!--El nombre de los campos que se van a mostrar en la vista-->
                                    <th>Nombre</th>

                                    <th>Puesto</th>

                                    <th>Teléfono</th>

                                    <th>Edad</th>

                                    <th>Correo</th>

                                    <th>Salario</th>

                                    <th>Bonificación</th>

                                    <th>Bono profesional</th>

                                    <th>Total Salario</th>

                                </tr>
                            </thead>
                            <tbody align="center">

                                <?php foreach ($datospersonal as $datospersonal) {
                                    // code...
                                ?>
                                    <tr>
                                        <!-- Llamado de campos de los datos que queremos mostrar  -->
                                        <td><?= $datospersonal->Nombre ?></td>

                                        <td><?= $datospersonal->Puesto ?></td>

                                        <td><?= $datospersonal->Telefono ?></td>

                                        <td><?= $datospersonal->Edad ?></td>

                                        <td><?= $datospersonal->Correo ?></td>

                                        <td><?= $datospersonal->Salario ?></td>

                                        <td><?= $datospersonal->Bonificacion ?></td>

                                        <td><?= $datospersonal->BonificacionProfesional ?></td>

                                        <td><?= $datospersonal->TotalSalario ?></td>

                                    </tr>
                                <?php          } ?>
                            </tbody>

                        </table>
                    </div>


                </header>

            </article>



        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar">

        <!-- Logo -->
        <img src="<?php echo base_url(); ?>/assets/images/conred.png" width="150">

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><i class="fa-solid fa-house"></i><a href="<?php echo base_url(); ?>index.php/welcome">Inicio</a></li>
                <li><i class="fa-solid fa-location-dot"></i><a href="<?php echo base_url(); ?>index.php/sedes">Sedes</a></li>
                <li><i class="fa-solid fa-user"></i><a href="<?php echo base_url(); ?>index.php/personal">Personal</a></li>
                <li><i class="fa-solid fa-address-book"></i><a href="<?php echo base_url(); ?>index.php/contacto">Contacto</a></li>
            </ul>
        </nav>

        <!-- Copyright -->
        <ul id="copyright">
            <li>&copy; Conred.</li>
            <li>Hecho por: <a href="http://html5up.net">dddlTechWeb</a></li>
        </ul>

    </div>

    <!-- Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/browser.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/breakpoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/util.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>