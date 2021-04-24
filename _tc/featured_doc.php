      <div id="featured_doc">
        <hr>
        <span id="featured_doc_text">Featured</span>
        <?php
        $i=0;
        foreach ($posts as $query) if (array_key_exists('featured_doc', $query) && $query['featured_doc'] == "true" && $query['published'] == "true"){
          $i++;
          if($i==2) break; ?>
          <div id="featured_article">
            <?php echo '<a href="' . $query['url'] . '">' . $query['title'] . '</a>'; ?>
          </div>
          <hr>
          <?php } ?>
        </div>
