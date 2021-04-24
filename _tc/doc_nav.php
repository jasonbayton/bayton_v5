<?php $nav_entries = $posts ?>
<div id="aside_docs">
  <div class="aside-title">
    <h2>Documents</h2>
  </div>
  <?php
  usort($nav_entries, fn($a, $b) => strcmp($a['order'], $b['order']));
  foreach ($nav_entries as $query) if (array_key_exists('parentID', $query) && $post['parent'] == $query['parentID']) {
    foreach ($query['childTopics'] as $topic) {
      if ($post['topic'] == $topic) { ?>
      <details open class="android-topic">
      <?php } else { ?>
      <details class="android-topic">
        <?php } ?>
        <summary class="android-topic-title">
          <?php echo $topic; ?>
        </summary>
        <ul>
        <?php
        foreach ($nav_entries as $query){
          if ($query['parent'] == $post['parent'] && $query['topic'] == $topic && $query['published'] == "true") {
            echo '<li><!--' . $query['order'] . '--><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
          };
        } ?>
        </ul>
      </details>
    <?php }}; ?>
</div>
