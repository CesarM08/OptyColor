<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Historia Clinica</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="css/style_nav.css" rel="stylesheet">
    <link href="css/generalstyle.css" rel="stylesheet">
    <style>
    .content {
        margin-top: 60px;
        margin-bottom: 40px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <?php include("nav.php");?>
    </nav>
    <div class="container">
        <div class="content">
            <h2>Historia Clinca</h2>

            <form class="form" action="insert.php" method="POST">
                <div class="container">

                    <div class="row">
                        <div class="col-md">
                            <div role="tabpanel">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Inicio" aria-controls="Inicio"
                                            data-toggle="tab" role="tab">Inicio</a></li>
                                    <li role="presentation"><a href="#Agudezavisual" aria-controls="Agudezavisual"
                                            data-toggle="tab" role="tab">Agudeza Visual</a></li>
                                    <li role="presentation"><a href="#Motilidadocular" aria-controls="Motilidadocular"
                                            data-toggle="tab" role="tab">Motilidad Ocular</a></li>
                                    <li role="presentation"><a href="#Lensometria" aria-controls="Lensometria"
                                            data-toggle="tab" role="tab">Lensometria</a></li>
                                    <li role="presentation"><a href="#Anexos" aria-controls="Anexos" data-toggle="tab"
                                            role="tab">Anexos</a></li>
                                    <li role="presentation"><a href="#Refraccion" aria-controls="Refraccion"
                                            data-toggle="tab" role="tab">Refraccion</a></li>
                                    <li role="presentation"><a href="#Test" aria-controls="Test" data-toggle="tab"
                                            role="tab">Test</a></li>
                                    <li role="presentation"><a href="#Diagnostico" aria-controls="Diagnostico"
                                            data-toggle="tab" role="tab">Diagnostico</a></li>
                                    <li role="presentation"><a href="#Conducta" aria-controls="Conducta"
                                            data-toggle="tab" role="tab">Conducta</a></li>
                                    <li role="presentation"><a href="#Ajuntos" aria-controls="Ajuntos" data-toggle="tab"
                                            role="tab">Adjuntar archivos</a></li>
                                    <li>
                                        <label class="col-md-2 control-label">&nbsp;</label>
                                    </li>
                                    <div class="row">
                                        <a class="btn btn-primary btn-sm" name="finalizar" data-toggle="modal"
                                            data-target="#guardar"><span class="glyphicon  glyphicon-ok"></span></a>
                                        <a class="btn btn-danger btn-primary btn-sm" name="cancelar" data-toggle="modal"
                                            data-target="#cancelar"><span
                                                class="glyphicon  glyphicon-remove"></span></a>
                                    </div>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Inicio">
                                        <br>
                                        <?php include("addmotivo.php");?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Agudezavisual">
                                        <br>
                                        <?php include("addagudezavisual.php");?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Motilidadocular">
                                        <br>
                                        <?php include("addmotilidadocular.php");?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Lensometria">
                                        <br>
                                        <?php include("addlensometria.php");?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Anexos">
                                        <br>
                                        <?php include("addanexos.php");?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Refraccion">
                                        <br>
                                        <?php include("addrefraccion.php");?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Test">
                                        <br>
                                        <?php include("addtest.php");?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Diagnostico">
                                        <br>
                                        <?php include("adddiagnostico.php");?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Conducta">
                                        <br>
                                        <?php include("addconducta.php");?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Ajuntos">
                                        <br>
                                        <?php include("adjuntos.php");?>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="row">

                </div>

            </form>
        </div>
    </div>


    <!-- Modal -->
    <?php include("modal.php");?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
    $('.date').datepicker({
        format: 'dd-mm-yyyy',
    })
    </script>


</body>

</html>