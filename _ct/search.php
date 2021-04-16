<?php
$search = strtolower($_GET['keyword']);
echo $search;
?>

<section id="page_container">
  <article>
    <h2 id="article_title">
      <?php echo 'Results for "' . $search . '"'?>
    </h2>
    <?php
    foreach ($posts as $query){
      if (strtolower($query['parent']) == $search || strtolower($query['topic']) == $search ) {
        echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
    } else {
      echo 'No matches have been found for your search';
    }

     ?>
    </div>
  </article>
</section>
