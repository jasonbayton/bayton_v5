</div> <!-- Killing .max-width-->
<section id="trusted_logos">
  <!--svg class="angled-background-top" preserveAspectRatio="none" viewBox="0, 0, 100, 10">
    <polygon class="purple-triangle" points="100,100 100,0 0,10"></polygon>
  </svg-->
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
        $all_images = glob("{$themerelpath}/img/logos/*.*", GLOB_BRACE);
        shuffle($all_images);
        $images = array();
        $i=0;
        foreach ($all_images as $index => $image) {
          $i++;
          if($i==9) break;
          $image_name = basename($image);
          echo $image_name;
          echo
          '<div class="vendor-logo">
            <img alt="' . $image_name . '" src="' . $themerelpath . '/img/logos/' . $image_name . '"/>
          </div>';
        } ?>

        <!--div class="vendor-logo">
          <img alt="vmware logo" src="<?php echo $themerelpath ?>/img/logos/vm.png"/>
        </div>
        <div class="vendor-logo">
          <img alt="blaud logo" src="<?php echo $themerelpath ?>/img/logos/android.webp"/>
        </div>
        <div class="vendor-logo">
          <img alt="microsoft logo" src="<?php echo $themerelpath ?>/img/logos/wandera.png"/>
        </div>
        <div class="vendor-logo">
          <img alt="telefonica logo" src="<?php echo $themerelpath ?>/img/logos/se.png"/>
        </div>
        <div class="vendor-logo">
          <img alt="citrix logo" src="<?php echo $themerelpath ?>/img/logos/cit.png"/>
        </div>
        <div class="vendor-logo">
          <img alt="hmd logo" src="<?php echo $themerelpath ?>/img/logos/hmd.png"/>
        </div>
        <div class="vendor-logo">
          <img alt="mobileiron logo" src="<?php echo $themerelpath ?>/img/logos/mii.png"/>
        </div>
        <div class="vendor-logo">
          <img alt="cwsi logo" src="<?php echo $themerelpath ?>/img/logos/cwsi.png"/>
        </div-->
      </div>
      <div id="vendor_disclaimer">
        Data captured from annual analytics & social stats between 2019-2021
        showing website referrals, content shares, or similar interactions
      </div>
    </div>
</div>
</section>
<div class="max-width"> <!-- Reviving max-width -->
