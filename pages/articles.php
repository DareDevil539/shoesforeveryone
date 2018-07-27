<?php

$artName_q = mysqli_query($mysqli, "SELECT * FROM `articles` WHERE `id` = " . $_GET['id']);
$artName = mysqli_fetch_assoc($artName_q);

wrapper_top($artName['type'] . ' ' . $artName['brand'] . ' ' . $artName['model']);
?>

  <?php require 'includes/header.php'; ?>

  <article>
    <div class="container">
      <div class="row">
        <div class="art">
          <div class="art-top">
            <div class="art-img" style="background-image: url(/img/<?php echo $artName['image']; ?>);"></div>
          </div>
          <div class="art-side">
            <h3 class="art-title"><?php echo $artName['type'] . ' ' . $artName['brand'] . ' ' . $artName['model']; ?></h3>
            <div class="alert alert-primary art-price" role="alert">
              <?php echo '$' . $artName['price']; ?>
            </div>
            <p class="art-description">
              <?php echo $artName['description']; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </article>

  <div class="buy">
    <div class="container">
      <div class="row">
        <div class="form-buy col-6 offset-3">
          <div class="form-title">
            <h5>Quick buy!</h5></div>
          <form method="GET">
            <label for="name">Your name</label>
            <input type="text" placeholder="Your name" id="name" name="name">
            <br>
            <label for="email">Your email</label>
            <input type="email" placeholder="Your email" id="email" name="email">
            <br>
            <label for="address">Your address</label>
            <input type="text" placeholder="Your address" id="address" name="address">
            <br>
            <input type="button" value="Buy!" class="subm btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

  <script>
    $("document").ready(function() {
      $(".subm").click(function() {
        if ($("#name").val() != '' && $("#email").val() != '' && $("#address").val() != '') {
          if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(String($("#email").val()).toLowerCase())) {
            window.open("/buy?name=" + $("#name").val() + "&email=" + $("#email").val() + '&address=' + $("#address").val(), "_self");
          } else {
            swal(
              'Oops..',
              'You wrote incorrect email!',
              'error'
            );
          }
        } else {
          swal(
            'Oops..',
            'You don`t fill the form!',
            'error'
          );
        }
      });
    });
  </script>

  <?php require 'includes/footer.php'; wrapper_bottom(); ?>