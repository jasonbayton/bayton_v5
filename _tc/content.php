<!--?php require "_ct/post.php"; ?-->

<div class="max-width">
<?php
$url = strtolower($_GET['args']);
if($url === ""){
    $url = "document_root";
}

// ToDo: Turn this into a fancy page by including the pages folder.
if (!array_key_exists($url, $posts)) {
    header('HTTP/1.1 404 Not Found');
    die('Page not found: ' . $_GET['args']);
}

$post = $posts[$url];
$published = DateTime::createFromFormat('Y-m-d', "$post['date']")->format('M-d-Y');
$updated = DateTime::createFromFormat('Y-m-d', "$post['updated']")->format('M-d-Y');
include ("$themedir/_ct/{$post["type"]}.php");
?>
</div>
