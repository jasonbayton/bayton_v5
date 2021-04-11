<section id="archive_posts">
  <h2 id="archive_title">
    Android Enterprise
  </h2>
  <div id="archive_posts_container">

    <?php foreach ($post['topic'] as $topic) { ?>
      <div class="related-post-column">
      <?php echo '<div class="tag-title">'.$topic.'</div>'; ?>
    <ul class="related-posts-list">
      <?php foreach ($posts as $query){
          if (in_array($topc, $query['topic']) && $query['published'] == "true") {
            echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
          };
        } ?>
        </ul>
      </div>
    <?php  } ?>

    </div>
  </section>
