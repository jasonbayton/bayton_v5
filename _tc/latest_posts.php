<section id="latest_posts">
  <h2 id="latest_title">
    Read the latest
  </h2>
  <div id="latest_posts_container">
    <div id="latest_articles">
      <h3 class="section-title">
        Articles
      </h3>
      <?php
        $i=0;
        foreach ($posts as $query){
          $transDate = date("M d, Y", strtotime($query['date']));
          if ($query['published'] == "true" && $query['type'] == "post") {
          $i++;
          if($i==6) break; ?>
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
                  <?php echo '<a href="' . $query['url'] . '">' . $query['title'] . '</a>' ?>
                </h3>
              </div>
              <div class="latest-posts-subtitle">
                <span class="the-subtitle">
                  <?php echo $query['subtitle']; ?>
                </span>
              </div>
            </div>
        <?php }} ?>
      <button id="read_more" class="button-blue button-rounded">
        <a href="/archive">Read more</a>
      </button>
    </div>
    <div id="latest_docs">
      <h3 class="section-title">
        Docs
      </h3>
      <?php
        $i=0;
        foreach ($posts as $query){
          $transDate = date("M d, Y", strtotime($query['date']));
          if ($query['published'] == "true" && $query['type'] == "doc") {
          $i++;
          if($i==6) break; ?>
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
                  <?php echo '<a href="' . $query['url'] . '">' . $query['title'] . '</a>' ?>
                </h3>
              </div>
              <div class="latest-posts-subtitle">
                <span class="the-subtitle">
                  <?php echo $query['subtitle']; ?>
                </span>
              </div>
            </div>
        <?php }} ?>
      <button id="read_more" class="button-blue button-rounded">
        <a href="/docs">Read more</a>
      </button>
    </div>
  </div>
</section>
