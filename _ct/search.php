<?php
$search = strtolower($_GET['keyword']);
?>

<section id="page_container">
  <article>
    <h2 id="article_title">
      <?php echo 'Results for "' . $search . '"'?>
    </h2>
    <?php
    foreach ($posts as $query){
      if (strpos(strtolower($query['parent']), $search) || strpos(strtolower($query['topic']), $search)) {
        echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      }
      foreach ($query['categories'] as $category){
        if (strpos(strtolower($category), $search)) {
          echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
        }
      }
      foreach ($query['tags'] as $tag){
        if (strpos(strtolower($tag), $search)) {
        echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
        }
      }
      if (strpos(strtolower($query['title']), $search)){
        echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      }
    };
     ?>
    </div>
  </article>
</section>
