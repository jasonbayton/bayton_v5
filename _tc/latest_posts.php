<section id="latest_posts">

<?php
usort($posts, fn($a, $b) => strcmp($b['date'], $a['date']));
for($i = 0; $i < 5; $i++){
   print_r( $posts[$i])
} ?>

  <h2 id="latest_title">
    Read the latest
  </h2>
  <div id="latest_posts_container">
    <div class="a-post">
      <div class="latest-posts-date">
        <div class="the-date">
          13th Dec 2020
        </div>
      </div>
      <div class="latest-posts-categories">
        <span class="the-category">
          Enterprise
        </span>
        <span class="the-category">
          Android
        </span>
      </div>
      <div class="latest-posts-title">
        <h3 class="latest-title">
          Listen again: BM podcast #144 – Jason Bayton & Russ Mohr talk Android!
        </h3>
      </div>
      <div class="latest-posts-subtitle">
        <span class="the-subtitle">
          This is a subtitle
        </span>
      </div>
    </div>

    <div class="a-post">
      <div class="latest-posts-date">
        <div class="the-date">
          13th Dec 2020
        </div>
      </div>
      <div class="latest-posts-categories">
        <span class="the-category">
          Enterprise
        </span>
        <span class="the-category">
          Android
        </span>
      </div>
      <div class="latest-posts-title">
        <h3 class="latest-title">
          On building Android devices
        </h3>
      </div>
      <div class="latest-posts-subtitle">
        <span class="the-subtitle">
          This is a subtitle
        </span>
      </div>
    </div>
    <div class="a-post">
      <div class="latest-posts-date">
        <div class="the-date">
          13th Dec 2020
        </div>
      </div>
      <div class="latest-posts-categories">
        <span class="the-category">
          Enterprise
        </span>
        <span class="the-category">
          Android
        </span>
      </div>
      <div class="latest-posts-title">
        <h3 class="latest-title">
          Google announce big changes to zero-touch
        </h3>
      </div>
      <div class="latest-posts-subtitle">
        <span class="the-subtitle">
          This is a subtitle
        </span>
      </div>
    </div>
    <div class="a-post">
      <div class="latest-posts-date">
        <div class="the-date">
          13th Dec 2020
        </div>
      </div>
      <div class="latest-posts-categories">
        <span class="the-category">
          Enterprise
        </span>
        <span class="the-category">
          Android
        </span>
      </div>
      <div class="latest-posts-title">
        <h3 class="latest-title">
          Workspace ONE UEM 1810 introduces support for Android Enterprise
          fully managed devices with work profiles
      </div>
      <div class="latest-posts-subtitle">
        <span class="the-subtitle">
          This is a subtitle
        </span>
      </div>
    </div>
  </div>
  <button id="read_more" class="button-blue button-rounded">
    Read more <i class="fas fa-arrow-right"></i>
  </button>
</section>
