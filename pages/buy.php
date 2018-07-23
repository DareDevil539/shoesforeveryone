<?php wrapper_top('Buy!'); ?>

<div class="ret">
  <h3><?php echo 'Successful, ' . $_GET['name'] . '!'; ?></h3>
  <h5>Your transaction has been confirmed!</h5>
  <h5><?php echo 'Check sended to email ' . $_GET['email']; ?></h5>
  <h5><?php echo 'Your device will be send to ' . $_GET['address']; ?></h5>
  <a href="/home" class="btn btn-primary">Return to the shopping!</a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

<script>
  swal(
  'Good job!',
  'Your transaction has been confirmed!',
  'success'
)
</script>

<?php wrapper_bottom(); ?>
