</div> <!-- Killing .max-width-->
<div class="full-width">
  <section id="older_posts">
    <div id="older_container">
      <h2 id="older_title">
        Everything else
      </h2>
      <div id="older_posts_container">
        <div id="post_group_left">
          <h3 class="older-posts-title">
            Enterprise
          </h3>
          <ul class="older-posts-list">
            <?php
            $i=0;
            foreach ($posts as $query){
              if (in_array('$tag', $query['tags']) && $query['published'] == "true") {
                $i++;
                if($i==6) break;
                echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
              };
            } ?>
          </ul>
          <button class="arrow-only button-white button-rounded">
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="max-width"> <!-- Reviving max-width -->
