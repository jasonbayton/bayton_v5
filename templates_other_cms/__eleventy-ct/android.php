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
    };

    if (!empty($post['featuredImage'])) {
    echo '<div id="featured_image"><img src="' . $post['featuredImage'] . '"></div>';
    } ?>

    <div id="literal_content" class="js-toc-content">

      <?php
      $intro = file_get_contents("content/docs/android/topics/intro.md");
      echo $Parsedown->text($intro);
      ?>

      <?php include "$themedir/_tc/featured_doc.php"; ?>

      <div id="android_post_container">
        <div id="android_grid_left">
          <?php
          $docitems = $posts;
          usort($docitems, fn($a, $b) => strcmp($a['order'], $b['order']));
          foreach ($docitems as $query) if ($query['parentID'] == "Android") {
            foreach ($query['childTopics'] as $topic) { ?>
              <div class="android-topic">
                <div class="android-topic-title">
                  <h2><?php echo $topic; ?></h2>
                </div>
                <ul>
                <?php
                foreach ($docitems as $query){
                  if ($query['parent'] == "Android" && $query['topic'] == $topic && $query['published'] == "true") {
                    echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
                  };
                } ?>
                </ul>
              </div>
            <?php }}; ?>
          <div class="android-topic">
            <div class="android-topic-title">
              <h2>External resources</h2>
            </div>
            <div class="android-topic-subtitle">
              Useful documentation from other sources.
            </div>
            <?php
            $external = file_get_contents("content/docs/android/topics/external-resources.md");
            echo $Parsedown->text($external);
            ?>
          </div>
        </div>
        <div id="android_grid_right">
          <div class="android-topic">
            <div class="android-topic-title">
              <h2>Articles</h2>
            </div>
            <div class="android-topic-subtitle">
              For topical content around news and events.
            </div>
            <ul>
            <?php
            foreach ($posts as $query) if (in_array('enterprise', $query['categories']) && in_array('android', $query['tags']) && $query['published'] == "true") {
                echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
              } ?>
            </ul>
          </div>
          <div class="android-topic">
            <div class="android-topic-title">
              <h2>External articles</h2>
            </div>
            <div class="android-topic-subtitle">
              Articles I've written for external publishers.
            </div>
            <?php
            $external = file_get_contents("content/docs/android/topics/external-blogs.md");
            echo $Parsedown->text($external);
            ?>
          </div>
        </div>
      </div>

    </div>
    <?php include "$themedir/_tc/report.php"; ?>
  </article>
</section>
