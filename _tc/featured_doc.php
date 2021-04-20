      <div id="featured_doc">
        <hr>
        <span id="featured_text">Featured</span>
        <?php
        $i=0;
        foreach ($posts as $query) if ($query['featured_doc'] == 'true' && $query['published'] == "true"){
          $i++;
          if($i==2) break; ?>
          <h2 id="featured_article">
            <?php echo '<a href="' . $query['url'] . '">' . $query['title'] . '</a>'; ?>
          </h2>
          <hr>
          <?php } ?>
        </div>
