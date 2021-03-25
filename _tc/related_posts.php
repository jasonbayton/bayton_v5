</div> <!-- Killing .max-width-->
<div class="full-width">
  <section id="related_posts">
    <div id="related_container">
      <h2 id="related_title">
        Everything else
      </h2>
      <div id="related_posts_container">
        <?php
        foreach ($post['tags'] as $tag) {
          echo $tag; ?>
        <ul class="related-posts-list">
          <?php $i=0;
            foreach ($posts as $query){
              if (in_array($tag, $query['tags']) && $query['published'] == "true") {
                $i++;
                if($i==6) break;
                echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
              };
            }
                    </ul>
          } ?>
      </div>
    </div>
  </section>
</div>
<div class="max-width"> <!-- Reviving max-width -->
