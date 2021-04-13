<div id="aside_docs">
  <div class="aside-title">
    <h2>Documents</h2>
  </div>
  <div class="android-topic">
    <div class="android-topic-title">
      <h3>Getting started</h3>
    </div>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "Getting started" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </div>

  <div class="android-topic">
    <div class="android-topic-title">
      <h3>Diving deeper</h3>
    </div>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "Diving deeper" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </div>

  <div class="android-topic">
    <div class="android-topic-title">
      <h3>Zero-touch</h3>
    </div>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "Zero-touch" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </div>

  <div class="android-topic">
    <div class="android-topic-title">
      <h3>App management</h3>
    </div>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "App management" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </div>

  <div class="android-topic">
    <div class="android-topic-title">
      <h3>Vendor specific</h3>
    </div>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "Vendor specific" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </div>
  <div class="android-topic">
    <div class="android-topic-title">
      <h3>Resources</h3>
    </div>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "Resources" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </div>
</div>
