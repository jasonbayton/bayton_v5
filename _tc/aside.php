<div id="aside_container">
  <div id="aside_meta">
    <div class="aside-title">
      <h2>Meta</h2>
    </div>
    <div class="aside-meta">
      Published: <?php echo $published ?>
    </div>
    <div class="aside-meta">
      Updated: <?php echo $updated ?>
    </div>
    <div class="aside-meta">
      Read time: <?php if ($readtime == 1) {
      echo $readtime . ' minute';
      } else {
      echo $readtime . ' minutes';
      } ?>
    </div>
  </div>
  <?php include "$themedir/_tc/toc.php"; ?>
  <?php if($post["type"] == "doc"){
    include "$themedir/_tc/doc-nav.php";
  } ?>
</div>
