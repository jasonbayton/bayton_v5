<?php
$search = $_GET['keyword'];
echo $search;
?>

<section id="page_container">
  <article>
    <h2 id="article_title">
      <?php echo 'Results for' . $search;?>
    </h2>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == $search || $query['topic'] == $search || $query['tag'] == $search) {
        echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </div>
  </article>
</section>
