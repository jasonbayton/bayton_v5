<section id="latest_posts">
  <h2 id="latest_title">
    Read the latest
  </h2>

  <?php
    usort($posts, fn($a, $b) => strcmp($b['date'], $a['date']));
    for($i = 0; $i < 5; $i++){

      $transDate = date("M d, Y", strtotime($posts[$i]['date']));
      ?>

      <div id="latest_posts_container">
        <div class="a-post">
          <div class="latest-posts-date">
            <div class="the-date">
              <?php echo $$transDate; ?>
            </div>
          </div>
          <div class="latest-posts-categories">
          <?php foreach ($posts[$i]['categories'] as $category) {
              echo '<span class="the-category">' . $category .'</span>'; }; ?>
          </div>
          <div class="latest-posts-title">
            <h3 class="latest-title">
              <?php echo $posts[$i]['title']; ?>
            </h3>
          </div>
          <div class="latest-posts-subtitle">
            <span class="the-subtitle">
              <?php echo $posts[$i]['subtitle']; ?>
            </span>
          </div>
        </div>
    <?php } ?>

  <button id="read_more" class="button-blue button-rounded">
    Read more <i class="fas fa-arrow-right"></i>
  </button>
</section>
