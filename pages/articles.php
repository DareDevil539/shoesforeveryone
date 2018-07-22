<?php

$artName_q = mysqli_query($mysqli, "SELECT * FROM `articles` WHERE `id` = " . $_GET['id']);
$artName = mysqli_fetch_assoc($artName_q);

wrapper_top($artName['type'] . ' ' . $artName['brand'] . ' ' . $artName['model']);
?>

  <?php require 'includes/header.php'; ?>

  <article>
    <div class="container">
      <div class="row">
        <div class="col-5">
          <div class="art-img" style="background-image: url(/img/<?php echo $artName['image']; ?>);"></div>
        </div>
        <div class="col-6 offset-1">
          <h3 class="art-title"><?php echo $artName['type'] . ' ' . $artName['brand'] . ' ' . $artName['model']; ?></h5>
          <p class="art-description"><?php echo $artName['description']; ?></p>
        </div>
      </div>
    </div>
  </article>

  <?php wrapper_bottom(); ?>
