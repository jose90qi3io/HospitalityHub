<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:8080/HospitalityHub/css/styles_Habitaciones.css">
    <title>HospitalityHub</title>
</head>
<body>

    <?php
    include ("./modelo/conexion.php");
    include ("./componentes/navBar.php");
    ?>
    <style>
        .cards {
            width: 270px;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
        }
    </style>

    <h1 class="titulos">HABITACIONES</h1>

    <div class="container" method="POST">
    
        <?php
        $sql  = mysqli_query($conexion, "SELECT * FROM new_table");
        $estados = array(
            "Libre" => "rgb(142,203,135)",
            "Ocupado" => "rgb(183,62,49)",
            "Limpieza" => "rgb(17,132,184)"
        );
        while ($datos = mysqli_fetch_array($sql)) {
            $estado = $datos ['estado'];
            $color = $estados[$estado];
           
            ?>
            <input type="hidden" name="id" id="id">
            <a  data-bs-toggle="modal" data-bs-target="#modalInformehabitacion" data-bs-id <?= $datos['n_habitacion']?>>
            <div class="cards" style="background-color: <?php echo $color; ?>">
                <h5>Habitacion: <?php echo $datos['tipo']?></h5>
                <h6>No. <?php echo $datos['n_habitacion']?></h6>
                <h6>Estado:  <?php echo $datos['estado']?></h6>
                <i class="fa-solid fa-bed fa-3x"></i>

            </div>     
            </a>

            

            <?php
                
        }
        ?>
    </div>
        <?php
            include ("./componentes/modalInformehabitacion.php");
        ?>
        <script>
            const editarModal = document.getElementById('modalInformehabitacion');
             editarModal = addEventListener('show.bs.modal', event =>{
                const a = event.relatedTarget
                const id = a.getAttribute('data-bs-id') /* id = n_habitacion */

                const inputId = modalInformehabitacion.querySelector('.modal-body, #id')
             });
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f9c567468a.js" crossorigin="anonymous"></script>
</body>
</html>

