<!--?php require "_ct/post.php"; ?-->

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

include ("_ct/{$post["type"]}.php"); ?>
