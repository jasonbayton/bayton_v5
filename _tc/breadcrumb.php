  <?php if (!empty($post['topic'] && $post['parent'])){ ?>
    <div id="breadcrumb">
      <?php echo $post['topic'];?> <i class="fas fa-caret-right"></i> <?php echo $post['parent']; ?>
    </div>
  <?php }; ?>

<!--
To come later - if these don't exist, don't show anything.
If parent isn't under a topic directly, add the 3 dots ...
And add categories, linked, here also.
-->
