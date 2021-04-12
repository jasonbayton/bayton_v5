<div id="share_container">
  <hr id="share_hr">
  <div id="tag_list">
    <div id="tag_title">Tags:</div>
    <?php foreach ($post['tags'] as $tag) {
        echo '<div class="tags"><a class="the-tag" href="/tag/' . $tag . '">' . $tag . '</a></div>'; };
    ?>
  </div>
  <!--div id="share_icons">
    <span id="share_li"><i class="fab fa-linkedin"></i></span>
    <span id="share_tw"><i class="fab fa-twitter-square"></i></span>
    <span id="share_wa"><i class="fab fa-whatsapp-square"></i></span>
    <span id="share_fb"><i class="fab fa-facebook-square"></i></span>
    <span id="share_em"><i class="fas fa-envelope-square"></i></span>
  </div-->
</div>
<?php include "$themedir/_tc/report.php"; ?>
