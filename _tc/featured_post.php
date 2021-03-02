</div> <!-- Killing .max-width-->

<div class="full-width">
  <section id="featured">
    <svg class="angled-background-top" preserveAspectRatio="none" viewBox="0, 0, 100, 10">
      <polygon class="left-triangle orange-cross" points="0,0 0,100 100,10"></polygon>
      <polygon class="right-triangle" points="100,100 100,0 0,10"></polygon>
    </svg>
    <div class="primary-background">
      <div id="featured_container" class="criss-cross orange-cross criss-cross-mid">
        <span id="featured_text">Featured article</span>
        <h2 id="featured_article">
          <?php
          foreach ($posts as $query){
            if ($query['featured'] == 'true'){
              echo $query['title'];
            }
          } ?>
        </h2>
        <button id="embedded_readmore" class="button-blue button-rounded">
          <a href="<?php echo $post ?>">Read more</a> <i class="fas fa-arrow-right"></i>
        </button>
      </div>
    </div>
    <svg class="angled-background-bottom" preserveAspectRatio="none" viewBox="0, 0, 100, 10">
    	<polygon class="left-triangle orange-cross" points="100,0 0,0, 100,10"></polygon>
      <polygon class="shadow-triangle" points="0,10 100,0, 100,0.4"></polygon>
    	<polygon class="right-triangle" points="100,0 0,0, 0,10"></polygon>
    </svg>
  </section>
</div>
<div class="max-width"> <!-- Reviving max-width -->
