<div class="max-width">
<?php

$published = date("M d, Y", strtotime($post['date']));
$updated = date("M d, Y", strtotime($post['updated']));

include ("$themedir/_ct/{$post['type']}.php");
echo '<!-- Content type:' . $post['type'] . '-->';
echo '<!-- Content type:' . $post[$url] . '-->';
?>
</div>
