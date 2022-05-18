<!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>CONRED Sedes</title>
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
                    <h2>Sedes <i class="fa-solid fa-location-dot"></i></h2>
                    <p>CONRED</p>
                </header>
                <div class="info">

                </div>
                <center>
                    <img src="<?php echo base_url(); ?>/assets/images/gbconred.jpg" width="450">
                </center>

            </article>

            <!-- Post -->
            <article class="box post post-excerpt">
                <header>
                    <!--
									Note: Titles and subtitles will wrap automatically when necessary, so don't worry
									if they get too long. You can also remove the <p> entirely if you don't
									need a subtitle.
								-->
                    <p class="texto-justificado">CONRED - Sedes a nivel nacional -</p>


                    <br />

                    <div class="panel-body">

                        <table class="normal">
                            <?php
                            $direccion = "";
                            //  echo $usuario->nombre_archivo."<br>";

                            $direccion =  base_url() . "index.php/sedes/mostrar";


                            ?>
                            <a href="<?php echo base_url(); ?>index.php/reporte/reporteSedes"><button type="button">Descargar sedes Excel <i class="fa-solid fa-file-excel"></i></button></a>
                            <br />
                            <br />
                            <a href="<?php echo $direccion; ?>"><button type="button">Descargar sedes PDF <i class="fa-solid fa-file-pdf"></i></button></a>
                            <br />
                            <br />
                            <thead>

                                <tr>
                                    <!--El nombre de los campos que se van a mostrar en la vista-->
                                    <th>No</th>

                                    <th>Sede</th>

                                    <th>Dirección Fiscal</th>

                                    <th>Teléfono</th>

                                    <th>Extensión</th>

                                    <th>Celular Institucional</th>

                                </tr>
                            </thead>
                            <tbody align="center">

                                <?php foreach ($datosedes as $datosedes) {
                                    // code...
                                ?>
                                    <tr>
                                        <!-- Llamado de campos de los datos que queremos mostrar  -->
                                        <td><?= $datosedes->idSedes ?></td>

                                        <td><?= $datosedes->NombreSede ?></td>

                                        <td><?= $datosedes->DireccionFiscal ?></td>

                                        <td><?= $datosedes->Telefono ?></td>

                                        <td><?= $datosedes->Extension ?></td>

                                        <td><?= $datosedes->CelularInstitucional ?></td>


                                    </tr>
                                <?php          } ?>

                            </tbody>

                        </table>

                    </div>


                </header>
                <div class="info">

                </div>


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