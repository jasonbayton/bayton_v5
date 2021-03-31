<section id="content_container">
  <aside>
    <?php include "$themedir/_tc/aside.php"; ?>
  </aside>
  <article>
    <?php include "$themedir/_tc/breadcrumb.php"; ?>
    <div id="article_meta">
      <i class="fas fa-calendar"></i> <?php echo $published;?> | <i class="fas fa-edit"></i> <?php echo $updated;?> | <i class="fas fa-clock"></i> <?php if ($readtime == 1) {
            echo $readtime . ' minute';
            } else {
            echo $readtime . ' minutes';
            } ?>
    </div>
    <h2 id="article_title">
      <?php echo $post['title'];?>
    </h2>
    <?php if (!empty($post['subtitle'])) {
    echo '<div id="article_subtitle">' . $post['subtitle'] . '</div>';
    } ?>
    <?php if (!empty($post['featuredImage'])) {
    echo '<div id="featured_image"><img src="' . $post['featuredImage'] . '"></div>';
    } ?>
    <!-- Inline TOC, perhaps for later -->
    <!--div id="inline_toc">
      <!--?php include "$themedir/_tc/toc.php"; ?-->
    <!--/div-->
    <div id="literal_content" class="js-toc-content">
      <?php
      // Output post
      echo $Parsedown->text($content);
      ?>
    </div>
    <?php include "$themedir/_tc/share.php"; ?>
  </article>
</section>
<?php include "$themedir/_tc/related_posts.php"; ?>
<?php include "$themedir/_tc/older_posts.php"; ?>
