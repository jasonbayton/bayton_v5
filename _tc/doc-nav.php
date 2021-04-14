<div id="aside_docs">
  <div class="aside-title">
    <h2>Documents</h2>
  </div>
  <?php foreach ($posts as $query){?>
  <?php echo '<!--'.$query['topic'].'-->';
  if ($post['topic'] == $query['topic']) { ?>
  <details open class="android-topic">
  <?php } else { ?>
  <details class="android-topic">
    <?php } ?>
    <summary class="android-topic-title">
      Getting started
    </summary>
    <ul>
    <?php
      if ($query['parent'] == "Android" && $query['topic'] == "Getting started" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      }; ?>
    </ul>
  </details>
<?php } ?>
  <?php if ($post['topic'] == $query['topic']) { ?>
  <details open class="android-topic">
  <?php } else { ?>
  <details class="android-topic">
    <?php } ?>
    <summary class="android-topic-title">
      Diving deeper
    </summary>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "Diving deeper" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </details>

  <?php if ($post['topic'] == $query['topic']) { ?>
  <details open class="android-topic">
  <?php } else { ?>
  <details class="android-topic">
    <?php } ?>
    <summary class="android-topic-title">
      Zero-touch
    </summary>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "Zero-touch" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </details>

  <?php if ($post['topic'] == $query['topic']) { ?>
  <details open class="android-topic">
  <?php } else { ?>
  <details class="android-topic">
    <?php } ?>
    <summary class="android-topic-title">
      App management
    </summary>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "App management" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </details>

  <?php if ($post['topic'] == $query['topic']) { ?>
  <details open class="android-topic">
  <?php } else { ?>
  <details class="android-topic">
    <?php } ?>
    <summary class="android-topic-title">
      Vendor specific
    </summary>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "Vendor specific" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </details>
  <?php if ($post['topic'] == $query['topic']) { ?>
  <details open class="android-topic">
  <?php } else { ?>
  <details class="android-topic">
    <?php } ?>
    <summary class="android-topic-title">
      Resources
    </summary>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "Resources" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </details>
</div>
