<div id="aside_docs">
  <div class="aside-title">
    <h2>Documents</h2>
  </div>
  <details class="android-topic">
    <summary class="android-topic-title">
      Getting started
    </div>
    <ul>
    <?php
    foreach ($posts as $query){
      if ($query['parent'] == "Android" && $query['topic'] == "Getting started" && $query['published'] == "true") {
        echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
      };
    } ?>
    </ul>
  </details>

  <details class="android-topic">
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

  <details class="android-topic">
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

  <details class="android-topic">
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

  <details class="android-topic">
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
  <details class="android-topic">
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
