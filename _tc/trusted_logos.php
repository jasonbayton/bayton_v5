</div> <!-- Killing .max-width-->
<section id="trusted_logos">
  <div class="purple-background">
    <div id="trusted_container">
      <div id="trusted_textgroup">
        <h2 id="trusted_title">
          Relevant, up to date Android content for 200,000 visitors annually
        </h2>
        <div id="trusted_tag">
          Some of the vendors and organisations I've assisted or collaborated with include:
        </div>
      </div>
      <div id="vendor_logo_container">
        <?php
        $all_images = glob("theme/bayton_v5/img/logos/*.*");
        shuffle($all_images);
        $images = array();
        $i=0;
        foreach ($all_images as $image) {
          $i++;
          if($i==9) break;
          $image_name = basename($image);
          echo
          '<div class="vendor-logo">
            <img alt="' . $image_name . '" src="' . $themerelpath . '/img/logos/' . $image_name . '"/>
          </div>';
        } ?>
      </div>
      <div id="vendor_disclaimer">
        Data captured from annual analytics & social stats between 2019-2021
        showing website referrals, content shares, or similar interactions
      </div>
    </div>
  </div>
</section>
<div class="max-width"> <!-- Reviving max-width -->
