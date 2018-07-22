<?php
$catName_q = mysqli_query($mysqli, "SELECT `name` FROM `categories` WHERE `id` = " . (int)$_GET['id']);
$catName = mysqli_fetch_assoc($catName_q);
wrapper_top('All goods in category ' . $catName['name']);
?>

<?php require 'includes/header.php'; ?>

<?php $articles = mysqli_query($mysqli, "SELECT * FROM `articles` WHERE `cat_id` = " . (int)$_GET['id'] . " ORDER BY `id` DESC"); ?>

<div class="label-cat"><?php echo $catName['name'] . ':'; ?></div>

<?php require 'includes/main.php'; ?>

<?php wrapper_bottom(); ?>
