<section id="content_container">
  <aside>
    <?php include "$themedir/_tc/aside.php"; ?>
  </aside>
  <article>
    <?php include "$themedir/_tc/breadcrumb.php"; ?>
    <div id="article_meta">
      <i class="fas fa-calendar"></i> <?php echo $published;?> | <i class="fas fa-edit"></i> <?php echo $updated;?> | <i class="fas fa-clock"></i> <?php if ($readtime == 1) {
            echo $readtime . ' minute';
            } else {
            echo $readtime . ' minutes';
            } ?>
    </div>
    <h2 id="article_title">
      <?php echo $post['title'];?>
    </h2>
    <?php if (!empty($post['subtitle'])) {
    echo '<div id="article_subtitle">' . $post['subtitle'] . '</div>';
    } ?>
    <?php if (!empty($post['featuredImage'])) {
    echo '<div id="featured_image"><img src="' . $post['featuredImage'] . '"></div>';
    } ?>

    <div id="literal_content" class="js-toc-content">

      <div id="android_post_container">
        <div id="android_grid_left">
          <div class="android-topic">
            <div class="android-topic-title">
              <h2>Getting started</h2>
            </div>
            <ul>
            <?php
            foreach ($posts as $query){
              if ($query['parent'] == "Android" && $query['topic'] == "Getting started" && $query['published'] == "true") {
                echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
              };
            } ?>
            </ul>
          </div>

          <div class="android-topic">
            <div class="android-topic-title">
              <h2>Diving deeper</h2>
            </div>
            <ul>
            <?php
            foreach ($posts as $query){
              if ($query['parent'] == "Android" && $query['topic'] == "Diving deeper" && $query['published'] == "true") {
                echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
              };
            } ?>
            </ul>
          </div>

          <div class="android-topic">
            <div class="android-topic-title">
              <h2>Zero-touch</h2>
            </div>
            <ul>
            <?php
            foreach ($posts as $query){
              if ($query['parent'] == "Android" && $query['topic'] == "Zero-touch" && $query['published'] == "true") {
                echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
              };
            } ?>
            </ul>
          </div>

          <div class="android-topic">
            <div class="android-topic-title">
              <h2>App management</h2>
            </div>
            <ul>
            <?php
            foreach ($posts as $query){
              if ($query['parent'] == "Android" && $query['topic'] == "App management" && $query['published'] == "true") {
                echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
              };
            } ?>
            </ul>
          </div>

          <div class="android-topic">
            <div class="android-topic-title">
              <h2>Vendor specific</h2>
            </div>
            <ul>
            <?php
            foreach ($posts as $query){
              if ($query['parent'] == "Android" && $query['topic'] == "Vendor specific" && $query['published'] == "true") {
                echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
              };
            } ?>
            </ul>
          </div>
          <div class="android-topic">
            <div class="android-topic-title">
              <h2>Resources</h2>
            </div>
            <ul>
            <?php
            foreach ($posts as $query){
              if ($query['parent'] == "Android" && $query['topic'] == "Resources" && $query['published'] == "true") {
                echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
              };
            } ?>
            </ul>
          </div>
        </div>
        <div id="android_grid_right">
          <div class="android-topic">
            <div class="android-topic-title">
              <h2>Articles</h2>
            </div>
            <ul>
            <?php
            foreach ($posts as $query){
              if (in_array('enterprise', $query['categories']) && in_array('android', $query['tags']) && $query['published'] == "true") {
                echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
              };
            } ?>
            </ul>
          </div>
        </div>
      </div>

    </div>
    <?php include "$themedir/_tc/report.php"; ?>
  </article>
</section>
