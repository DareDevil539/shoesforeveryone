<header>
  <div class="container-fluid">
    <div class="row">
      <div class="header col-12">
        <div class="logo col-3"><img src="img/logo.svg" alt="Logo" height="90"></div>
        <div class="menu col-5 offset-4">
          <div class="menu-itm col"><a href="/home">home</a></div>
          <div class="menu-itm col offset-1"><a href="/about">about</a></div>
          <div class="menu-itm col offset-1"><a href="/contact">contact us</a></div>
          <a href="#" class="t-but menu-itm"><span></span></a>
        </div>
      </div>
    </div>
  </div>

  <div class="header-hidden">
    <div class="menu-hidden">
      <div class="m-h-item"><a href="/home">home</a></div>
      <div class="m-h-item"><a href="/about">about</a></div>
      <div class="m-h-item"><a href="/contact">contact us</a></div>
    </div>
  </div>

  <?php $categories = mysqli_query($mysqli, "SELECT * FROM `categories`"); ?>

  <div class="container-fluid">
    <div class="row">
      <div class="menu-bar col">
        <?php
        while ($category = mysqli_fetch_assoc($categories)) {
            ?>
          <div class="menu-bar-itm col">
            <a href="/categories?id=<?php echo $category['id'] ?>" target="_blank">
              <?php echo $category['name']; ?>
            </a>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
</header>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>