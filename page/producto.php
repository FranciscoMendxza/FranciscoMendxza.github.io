<?php include "./../includes/header.php"?>
<div class="row d-flex justify-content-center mt-5 mb-5">
<div class="col-12">
<div class="d-flex justify-content-between row">
<?php
          include "./../includes/config.php";
          $peticion = "SELECT * FROM producto WHERE id = '".$_GET['idp']."'";
          $resultado = mysqli_query($conexion,$peticion);
          while($fila = mysqli_fetch_array($resultado)){
        ?>
        
        <div class="row text-white">
            <h2 class="text-center"><?php echo $fila['nombre']?></h2>
            <div class="col-12 col-lg-4">
                <img class="w-100" src="../assets/resources/img/<?php echo $fila['img']?> "alt="Error al cargar imagen">
            </div>
            <div class="col-12 col-lg-8">
                <p><strong>Descripcion de producto:</strong><?php echo $fila['descripcion']?></p>
                <p><strong>Precio:</strong>$<?php echo $fila['precio']?>pz</p>
                <a href="../page/index.php?" class="btn btn-danger">Regresar</a>
                <a id="bcomprar" class="btn btn-success">Comprar</a>
            </div>
        </div>
<?php
          }
    ?>

</div>
        </div>
</div>
<?php include "./../includes/footer.php"?>