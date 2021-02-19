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
      $Parsedown = new Parsedown();

      // Output post
      return $Parsedown->text($content);

      /**
      * Automatically add IDs to headings such as <h2></h2>
      */
      function auto_id_headings( $content ) {
	       $content = preg_replace_callback( '/(\<h[1-6](.*?))\>(.*)(<\/h[1-6]>)/i', function( $matches ) {
        	if ( ! stripos( $matches[0], 'id=' ) ) :
          	$heading_link = '<a href="#' . sanitize_title( $matches[3] ) . '" class="heading-link"> <small><sup><i class="fa fa-bookmark text-grey"></i></sup></small></a> ';
              $matches[0] = $matches[1] . $matches[2] . ' id="' . sanitize_title( $matches[3] ) . '">' . $heading_link . $matches[3]. $matches[4];
          endif;
          return $matches[0];
        }, $content );
    echo $content;
}

      ?>
    </div>
    <?php include "$themedir/_tc/share.php"; ?>
  </article>
</section>
<?php include "$themedir/_tc/older_posts.php"; ?>
