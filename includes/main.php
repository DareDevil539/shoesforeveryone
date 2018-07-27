<main>
  <div class="container">
    <div class="row">
      <?php while ($article = mysqli_fetch_assoc($articles)) {
    ?>
      <div class="col-wr">
        <div class="anCard">
          <div class="top-img" style="background-image: url(/img/<?php echo $article['image']; ?>)"></div>

          <div class="card-body">
            <div class="card-title">
              <h4 title="<?php echo $article['type'] . ' ' . $article['brand'] . ' ' . $article['model']; ?>"> <?php echo mb_substr($article['type'] . ' ' . $article['brand'] . ' ' . $article['model'], 0, 20) . '...'; ?></h4>
            </div>
            <div class="card-price">
              <?php echo '$' . $article['price']; ?>
            </div>
            <div class="card-desc">
              <p>
                <?php echo mb_substr($article['description'], 0, 150) . '...'; ?>
              </p>
            </div>
            <a href="/articles?id=<?php echo $article['id']; ?>" class="btn btn-primary" target="_blank">Details</a>
          </div>
        </div>
      </div>
      <?php
} ?>
    </div>
  </div>
</main>