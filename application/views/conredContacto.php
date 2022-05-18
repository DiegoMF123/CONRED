<!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>CONRED Contacto</title>
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
                    <!--
									Note: Titles and subtitles will wrap automatically when necessary, so don't worry
									if they get too long. You can also remove the <p> entirely if you don't
									need a subtitle.
								-->
                    <h2>Contacto <i class="fa-solid fa-address-card"></i></h2>
                    <p class="texto-justificado">CONRED</p>
                </header>
                <div class="info">

                </div>
                <center>
                    <img src="<?php echo base_url(); ?>assets/images/contacto.png" width="300" />
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

                            $direccion =  base_url() . "index.php/contacto/mostrarContacto";


                            ?>
                            <a href="<?php echo base_url(); ?>index.php/reporte/reporteContacto"><button type="button">Descargar contacto Excel <i class="fa-solid fa-file-excel"></i></button></a>
                            <br />
                            <br />
                            <a href="<?php echo $direccion; ?>"><button type="button">Descargar + contactos PDF <i class="fa-solid fa-file-pdf"></i></button></a>
                            <br />
                            <br />
                            <thead>

                                <tr>
                                    <!--El nombre de los campos que se van a mostrar en la vista-->
                                    <th>Contacto</th>

                                    <th>Direccion</th>

                                    <th>Telefono</th>

                                    <th>Correo</th>

                                    <th>Horario De Atencion</th>

                                </tr>
                            </thead>
                            <tbody align="center">

                                <?php foreach ($datoscontacto as $datoscontacto) {
                                    // code...
                                ?>
                                    <tr>
                                        <!-- Llamado de campos de los datos que queremos mostrar  -->
                                        <td><?= $datoscontacto->NombreContacto ?></td>

                                        <td><?= $datoscontacto->Direccion ?></td>

                                        <td><?= $datoscontacto->Telefono ?></td>

                                        <td><?= $datoscontacto->Correo ?></td>

                                        <td><?= $datoscontacto->HorarioDeAtencion ?></td>



                                    </tr>
                                <?php          } ?>
                            </tbody>

                        </table>
                    </div>


                </header>

            </article>

              <!-- Post -->
              <article class="box post post-excerpt">
                <header>
                    <h2><a href="#">Drección</a></h2>
                    <p>Ubicación google maps</p>
                </header>
                <div class="info">
                    <span class="date"><span class="month"><span>y</span></span> <span class="day"><i class="fa-solid fa-location-dot"></i></span><span class="year">, 2014</span></span>
                   
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.4354183568207!2d-90.52964808524119!3d14.574247589819283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a15867ac6e9d%3A0xfadfb27521fcf8ea!2sCONRED!5e0!3m2!1ses!2sgt!4v1652813046923!5m2!1ses!2sgt" width="1050" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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