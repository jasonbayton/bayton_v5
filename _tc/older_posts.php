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
            $enterprise = array_filter($posts, fn($obj) => in_array($obj->categories, 'enterprise')
            $i=0;
            foreach($enterprise as $result){
              echo '<li>' . $result['title'] . '</li>';
            $i++;
            if($i==3) break;
            } ?>
          </ul>
          <button class="arrow-only button-white button-rounded">
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>
        <div id="post_group_centre">
          <h3 class="older-posts-title">
            Guides
          </h3>
          <ul class="older-posts-list">
            <?php
            $guides = array_filter($posts, fn($obj) => in_array($obj->categories, 'guides')
            $i=0;
            foreach($guides as $result){
              echo '<li>' . $result['title'] . '</li>';
            $i++;
            if($i==3) break;
            } ?>
          </ul>
          <button class="arrow-only button-white button-rounded">
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>
        <div id="post_group_right">
          <h3 class="older-posts-title">
            Reviews
          </h3>
          <ul class="older-posts-list">
            <?php
            $reviews = array_filter($posts, fn($obj) => in_array($obj->categories, 'reviews')
            $i=0;
            foreach($reviews as $result){
              echo '<li>' . $result['title'] . '</li>';
            $i++;
            if($i==3) break;
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
