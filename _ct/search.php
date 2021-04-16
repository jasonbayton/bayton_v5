<?php
$search = strtolower($_GET['search']);
$search = $_SERVER['QUERY_STRING'];
$search = strtolower($_GET['args']);
echo $search;
?>

<section id="page_container">
  <article>
    <h2 id="article_title">
      <?php echo 'Results for' . $search;?>
    </h2>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == $search || $query['topic'] == $search || $query['tag'] == $search || $query['category'] == $search ) {
        echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </div>
  </article>
</section>
