<div id="aside_container">
  <div id="aside_meta">
    <div class="aside-title">
      <h2>Meta</h2>
    </div>
    <div class="aside-meta">
      Published: <?php echo $post['shortmonth'];?> <?php echo $post['day'];?>, <?php echo $post['year'];?>
    </div>
    <div class="aside-meta">
      Updated: <?php echo $post['updated'];?>
    </div>
    <div class="aside-meta">
      Read time: 9 minutes
    </div>
  </div>
  <?php include "$themedir/_tc/toc.php"; ?>
</div>
