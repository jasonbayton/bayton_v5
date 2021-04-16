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
    $i=0;
    foreach ($posts as $query){
      $i++;
      if (strtolower($query['parent']) == $search || strtolower($query['topic']) == $search) {
        echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      }
      foreach ($query['categories'] as $category){
        if (strtolower($category) == $search) {
          echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
        }
      }
      foreach ($query['tags'] as $tag){
        if (strtolower($tag) == $search) {
        echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
        }
      }
    };
echo $i;
     ?>
    </div>
  </article>
</section>
