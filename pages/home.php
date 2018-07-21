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

  <div class="container-fluid">
    <div class="row">
      <div class="menu-bar col">
        <div class="menu-bar-itm col"><a href="#">Mobile devices</a></div>
        <div class="menu-bar-itm col"><a href="#">Desktop devices</a></div>
        <div class="menu-bar-itm col"><a href="#">Other devices</a></div>
      </div>
    </div>
  </div>
</header>

<main>
  <div class="container">
    <div class="row">
      <div class="col-wr">
        <div class="flipcard">
          <div class="front">
            <img src="/img/art.jpg" alt="icon" class="top">
            <h4 class="flip-title">Electric teapot Picola PSK-003</h5>
            <div class="alert alert-primary" role="alert">
              $24.99
            </div>
          </div>
          <div class="back">
            <img src="/img/art.jpg" alt="icon" class="top">
            <h4 class="flip-title">Electric teapot Picola PSK-003</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias asperiores doloremque, repellendus quisquam veritatis, numquam placeat tempore quidem! Illum cupiditate eum rem maxime tenetur nam praesentium, suscipit eos vitae optio.</p>
            <a href="#" class="btn btn-primary">Buy!</a>
          </div>
        </div>
      </div>
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