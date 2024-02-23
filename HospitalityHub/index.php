<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:8080/HospitalityHub/css/styles.css">
    <title>HospitalityHub</title>
</head>
<body>

    <?php
    include ("./modelo/conexion.php");
    include ("./componentes/navBar.php");
   /*  include ("./controladores/estado_habitacion.php"); // Corrected path to controller */
    ?>
    <style>
        .cards {
            width: 270px;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
<h1 class="titulos">HABITACIONES </h1>
    <div class="container" method="POST">
    
        <?php
        $sql = $conexion->query("SELECT * FROM new_table");
        $estados = array(
            "Libre" => "rgb(142,203,135)",
            "Ocupado" => "rgb(183,62,49)",
            "Limpieza" => "rgb(17,132,184)"
        );
        while ($datos = $sql->fetch_object()) {
            $estado = $datos->estado;
            $color = $estados[$estado];
            ?>

            <div class="cards" style="background-color: <?php echo $color; ?>">
                <h5>Habitacion: <?=$datos->tipo?></h5>
                <h6>No.<?=$datos->n_habitacion?></h6>
                <h6>Estado: <?=$datos->estado?></h6>
                <i class="fa-solid fa-bed fa-3x"></i>

            </div>

            <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f9c567468a.js" crossorigin="anonymous"></script>
</body>
</html>

