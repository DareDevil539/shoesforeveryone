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
