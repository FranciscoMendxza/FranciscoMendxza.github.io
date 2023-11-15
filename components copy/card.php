<div class="d-flex row container">
<?php
          include "./../includes/config.php";
          $peticion = "SELECT * FROM producto";
          $resultado = mysqli_query($conexion,$peticion);
          while($fila = mysqli_fetch_array($resultado)){
        ?>

  <div class="d-flex card mt-2 mb-2 col-xl-4">
  <img src="../assets/resources/img/<?php echo $fila['img']?>" class="card-img-top mt-3" alt="...">
  <div class="card-body">
    <h5 class="card-title tarjeta"><?php echo $fila['nombre']?></h5>
    <p class="card-text tarjeta"><?php echo $fila['descripcion']?></p>
    <p class="card-text tarjeta">precio $<?php echo $fila['precio']?></p>
    <a id="bcomprar" class="btn btn-secondary">Pedir ahora</a>
    <a href="producto.php?idp=<?php echo $fila['id']?>" class="btn btn-primary">Ver mas </a>
  </div>
  </div>
  <?php
          }
    ?>

</div>