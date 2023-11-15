<div id="carouselExampleIndicators" class=" w-50 carousel slide carrusel" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
        <?php
          include "./../includes/config.php";
          $peticion = "SELECT * FROM slider";
          $resultado = mysqli_query($conexion,$peticion);
          while($fila = mysqli_fetch_array($resultado)){
        ?>
    <div class="carousel-item <?php echo $fila['estado']; ?>">
    <img src="../assets/resources/img/<?php echo $fila['img']; ?>" class="d-block w-100 img-carrusel" alt="...">
    </div>
    <?php
          }
    ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>