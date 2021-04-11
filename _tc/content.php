<div class="max-width">
<?php

$published = date("M d, Y", strtotime($post['date']));
$updated = date("M d, Y", strtotime($post['updated']));

$words = explode ( " ", $content );
$wordCount = count( $words );
$readtime = $wordCount / 200;
$readtime = ceil($readtime);

include ("$themedir/_ct/{$post['type']}.php");
echo '<!-- Content type:' . $post['type'] . '-->';
?>
</div>
