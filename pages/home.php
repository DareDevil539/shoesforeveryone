<?php wrapper_top($config['title']); ?>

<header>
  <div class="container-fluid">
    <div class="row">
      <div class="header col-12">
        <div class="logo col-3"><img src="img/logo.svg" alt="Logo" height="90px"></div>
        <div class="menu col-5 offset-4">
          <div class="menu-itm col"><a href="/home">home</a></div>
          <div class="menu-itm col offset-1"><a href="/about">about</a></div>
          <div class="menu-itm col offset-1"><a href="/contact">contact us</a></div>
        </div>
      </div>
    </div>
  </div>

  <?php $categories = mysqli_query($mysqli, "SELECT * FROM `categories`"); ?>

  <div class="container-fluid">
    <div class="row">
      <div class="menu-bar col">
        <?php
        while ($category = mysqli_fetch_assoc($categories)) {
            ?>
          <div class="menu-bar-itm col"><a href="/categories?id=<?php echo $category['id'] ?>" target="_blank"><?php echo $category['name']; ?></a></div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</header>

<?php $articles = mysqli_query($mysqli, "SELECT * FROM `articles` ORDER BY `id` DESC"); ?>


<main>
  <div class="container">
    <div class="row">
      <?php while ($article = mysqli_fetch_assoc($articles)) {
            ?>
      <div class="col-wr">
        <div class="flipcard">
          <div class="front">
            <div class="top-img" style="background-image: url(/img/<?php echo $article['image']; ?>)"></div>
            <h4 class="flip-title"><?php echo $article['type'] . ' ' . $article['brand'] . ' ' . $article['model']; ?></h5>
              <div class="alert alert-primary" role="alert"><?php echo '$' . $article['price']; ?></div>
            </div>
            <div class="back">
              <div class="top-img" style="background-image: url(/img/<?php echo $article['image']; ?>)"></div>
              <h4 class="flip-title"> <?php echo $article['type'] . ' ' . $article['brand'] . ' ' . $article['model']; ?></h5>
              <p><?php echo mb_substr($article['description'], 0, 150, 'utf8') . '...'; ?></p>
              <div class="alert alert-primary" role="alert"><?php echo '$' . $article['price']; ?></div>
              <a href="/articles?id=1" class="btn btn-primary" target="_blank">Details</a>
            </div>
          </div>
        </div>
    <?php
        } ?>
    </div>
  </div>
</main>

<footer>
  <div class="container-fluid">
    <div class="row">

    </div>
  </div>
</footer>

<?php wrapper_bottom(); ?>
