<section id="content_container">
  <aside>
    <?php include "$themedir/_tc/aside.php"; ?>
  </aside>
  <article>
    <?php include "$themedir/_tc/breadcrumb.php"; ?>
    <h2 id="article_title">
      <?php echo $post['title'];?>
    </h2>
    <!--div id="article_meta">
      Published Dec 13, 2020 | Updated Feb 22, 2021 | Read time: 9 minutes
    </div-->
    <div id="article_subtitle">
      <?php echo $post['subtitle'];?>
    </div>
    <div id="featured_image">
    </div>
    <div id="literal_content" class="js-toc-content">
      <?php
      // Open post data
      $content = file_get_contents("content/{$post["sourcefile"]}");

      // Parse post from markdown to HTML
      require('libraries/parsedown.php');
      require('libraries/ParsedownExtra.php');
      $Parsedown = new ParsedownExtra();

      // Output post
      echo $Parsedown->text($content);

      ?>
    </div>
    <?php include "$themedir/_tc/share.php"; ?>
  </article>
</section>
<?php include "$themedir/_tc/older_posts.php"; ?>
