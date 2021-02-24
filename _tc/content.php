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

$dateimport = $post['date'];
$dateexport = $post['updated'];

$importeddate = DateTime::createFromFormat('Y-m-d', $dateimport);
$exporteddate = $importeddate->format('M-d-Y');

$importedupdated = DateTime::createFromFormat('Y-m-d', $dateexport);
$exportedupdated = $importedupdated->format('M-d-Y');

include ("$themedir/_ct/{$post["type"]}.php");
?>
</div>
