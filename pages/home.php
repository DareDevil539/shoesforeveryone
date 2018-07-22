<?php wrapper_top($config['title']); ?>

<?php require 'includes/header.php'; ?>

<?php $articles = mysqli_query($mysqli, "SELECT * FROM `articles` ORDER BY `id` DESC"); ?>

<div class="label-cat">Last added:</div>

<?php require 'includes/main.php'; ?>

<footer>
  <div class="container-fluid">
    <div class="row">

    </div>
  </div>
</footer>

<?php wrapper_bottom(); ?>
