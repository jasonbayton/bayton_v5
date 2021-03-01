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
            foreach ($posts as $query){
              if ($query['categories'] == 'home'){
                echo '<li>' . $query['title'] . '</li>';
              }
            } ?>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
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
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
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
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
            <li>
              Connecting two synologies via SSH using
              public and private key pairs on Ubuntu
            </li>
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
