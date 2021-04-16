<?php $_GET["searchkeyword"]; ?>
<section id="page_container">
  <article>
    <h2 id="article_title">
      <?php echo 'Results for' . $_GET["searchkeyword"];?>
    </h2>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == $_GET["searchkeyword"] || $query['topic'] == $_GET["searchkeyword"] || $query['published'] == "true") {
        echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </div>
  </article>
</section>
