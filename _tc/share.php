<div id="share_container">
  <hr id="share_hr">
  <div id="tag_list">
    <?php foreach ($post['tags'] as $tag) {
        echo '<span class="the-tag">' . $tag .'</span>'; };
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
<div id="content_report">
  Problem with this content? <a href="https://github.com/jasonbayton/baytonorg_content/blob/master/<?php echo $post['sourcefile'];?>">Submit a PR</a>.
</div>
