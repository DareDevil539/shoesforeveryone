<?php wrapper_top($config['title']); ?>

<?php require 'includes/header.php'; ?>

<?php $articles = mysqli_query($mysqli, "SELECT * FROM `articles` ORDER BY `id` DESC"); ?>

<div class="label-cat">last added:</div>

<?php require 'includes/main.php'; ?>

<?php require 'includes/footer.php'; wrapper_bottom(); ?>
