<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Paciente</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="css/style_nav.css" rel="stylesheet">
    <style>
    .content {
        margin-top: 80px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <?php include("nav.php");?>
    </nav>
    <div class="container">
        <div class="content">
            <h2>Agregar Entidad</h2>
            <hr />

            <?php
			if(isset($_POST['addentidad'])){
				$razonsocial = strtolower ( mysqli_real_escape_string($con,(strip_tags($_POST["razonsocial"],ENT_QUOTES))));
				
			$verificarentidad = mysqli_query($con, "SELECT * FROM entidad WHERE razonsocial='$razonsocial'");
				if(mysqli_num_rows($verificarentidad) == 0){
						
			$insert = mysqli_query($con, "call sp_insert_entidad('$razonsocial')") or die(mysqli_error());
				if($insert){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
					}
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El documento ya esta registrado!</div>';
				}
			}
			
			?>

            <form class="form-horizontal" action="" method="post">

                <div class="form-group">
                    <label class="col-sm-3 control-label">Razon Social</label>
                    <div class="col-sm-4">
                        <input type="text" name="razonsocial" class="form-control" placeholder="Razon social" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">&nbsp;</label>
                    <div class="col-sm-6">
                        <input type="submit" name="addentidad" class="btn btn-sm btn-primary" value="Guardar datos">
                        <a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

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