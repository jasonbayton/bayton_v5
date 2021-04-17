  <section id="featured">
    <svg class="angled-background-top purple-background" preserveAspectRatio="none" viewBox="0, 0, 100, 10">
      <polygon class="left-triangle orange-cross" points="0,0 0,100 100,10"></polygon>
      <polygon class="right-triangle" points="100,100 100,0 0,10"></polygon>
    </svg>
    <div class="primary-background">
      <div id="featured_container" class="criss-cross orange-cross criss-cross-mid">
        <span id="featured_text">Featured article</span>
        <?php
        $i=0;
        foreach ($posts as $query) if ($query['featured_doc'] == 'true' && $query['published'] == "true"){
            $i++;
            if($i==2) break; ?>
            <h2 id="featured_article">
              <?php echo $query['title']; ?>
            </h2>
            <button id="embedded_readmore" class="button-blue button-rounded">
              <a href="<?php echo $query['url'] ?>">Read more</a></i>
            </button>
            <?php }} ?>
          </div>
      </div>
    <svg class="angled-background-bottom" preserveAspectRatio="none" viewBox="0, 0, 100, 10">
    	<polygon class="left-triangle orange-cross" points="100,0 0,0, 100,10"></polygon>
      <polygon class="shadow-triangle" points="0,10 100,0, 100,0.4"></polygon>
    	<polygon class="right-triangle" points="100,0 0,0, 0,10"></polygon>
    </svg>
  </section>
