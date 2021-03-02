<section id="latest_posts">
  <h2 id="latest_title">
    Read the latest
  </h2>

      <div id="latest_posts_container">
  <?php
    usort($posts, fn($a, $b) => strcmp($b['date'], $a['date']));
    $i=0;
    foreach ($posts as $url => $query){
      print_r($url);
      ?>
      $transDate = date("M d, Y", strtotime($query['date']));
      $i++;
      if($i==6) break;
        <div class="a-post">
          <div class="latest-posts-date">
            <div class="the-date">
              <?php echo $transDate; ?>
            </div>
          </div>
          <div class="latest-posts-categories">
          <?php foreach ($query['categories'] as $category) {
              echo '<span class="the-category">' . $category .'</span>'; }; ?>
          </div>
          <div class="latest-posts-title">
            <h3 class="latest-title">
              <?php echo '<a href="' . $url . '">' . $query['title'] . '</a>' ?>
            </h3>
          </div>
          <div class="latest-posts-subtitle">
            <span class="the-subtitle">
              <?php echo $query['subtitle']; ?>
            </span>
          </div>
        </div>
    <?php } ?>

  <button id="read_more" class="button-blue button-rounded">
    Read more <i class="fas fa-arrow-right"></i>
  </button>
</section>
