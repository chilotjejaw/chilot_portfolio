<?php
include("chilot.php");
include("header.php");
?>

<!-- HERO CAROUSEL -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="../php/images/furniture 1.jpg" class="d-block w-50">
      <div class="carousel-caption">
        <h2>Furniture Manufacturing</h2>
        <p>Crafted with vision and discipline.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="../php/images/garment 1.jpg" class="d-block w-50">
      <div class="carousel-caption">
        <h2>Garment Production</h2>
        <p>Quality clothing designed with care.</p>
      </div>
    </div>

  </div>
</div>

<!-- LATEST PRODUCTS -->
<div class="container mt-5">
  <h3 class="text-center mb-4">Latest Products</h3>
  <div class="row">

    <?php
    $result = mysqli_query($conn, "SELECT * FROM products LIMIT 6");

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="col-md-4 mb-4">
        <div class="card h-50">
          <img src="../assets/images/<?php echo $row['image']; ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name']; ?></h5>
            <p class="card-text"><?php echo $row['price']; ?> ETB</p>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>
</div>

<?php include("footer.php"); 
?>
