<section id="archive_posts">
  <h2 id="archive_title">
    Android Enterprise
  </h2>
  <div id="archive_posts_container">

    <?php
      foreach ($posts as $query){
        $transDate = date("M d, Y", strtotime($query['date']));
        if ($query['parent'] == "Android") {
          foreach ($query['topic']) {
            echo $query['topic'];
            echo $query['title'];
          };
        ?>
          <!--div class="a-post">
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
          </div-->
      <?php }} ?>

    </div>
  </section>
