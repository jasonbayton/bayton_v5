<section id="page_container">
  <article>
    <h2 id="article_title">
      <?php echo $post['title'];?>
    </h2>
    <div id="article_subtitle">
      <?php echo $post['subtitle'];?>
    </div>
    <div id="featured_image">
    </div>
    <!-- Inline TOC, perhaps for later -->
    <!--div id="inline_toc">
      <!--?php include "$themedir/_tc/toc.php"; ?-->
    <!--/div-->
    <div id="literal_content">
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
  </article>
</section>
