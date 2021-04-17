    <div class="primary-background">
      <div id="featured_container" class="criss-cross orange-cross criss-cross-mid">
        <span id="featured_text">Featured doc</span>
        <?php
        $i=0;
        foreach ($posts as $query) if ($query['featured_doc'] == 'true' && $query['published'] == "true"){
            $i++;
            if($i==2) break; ?>
            <h2 id="featured_article">
              <?php echo '<a href="' . $query['url'] . '">' . $query['title'] . '</a>'; ?>
            </h2>
            <button id="embedded_readmore" class="button-blue button-rounded">
              <a href="<?php echo $query['url'] ?>">Read more</a></i>
            </button>
            <?php } ?>
          </div>
      </div>
