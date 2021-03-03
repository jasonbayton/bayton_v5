<!--?php require "_ct/post.php"; ?-->

<div class="max-width">
<?php
$url = strtolower($_GET['args']);
if($url === ""){
    $url = "document_root";
}

if (!array_key_exists($url, $posts)) {
    header('HTTP/1.1 404 Not Found');
    die('Page not found: ' . $_GET['args']);
}

$post = $posts[$url];

$published = date("M d, Y", strtotime($post['date']));
$updated = date("M d, Y", strtotime($post['updated']));

include ("$themedir/_ct/{$post["type"]}.php");
?>
</div>
