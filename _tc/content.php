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

$importeddate = DateTime::createFromFormat('Y-m-d', $post['date']);
$exporteddate = $importeddate->format('M-d-Y');
echo $exporteddate;

$importedupdated = DateTime::createFromFormat('Y-m-d', $post['updated']);
$exportedupdated = $importedupdated->format('M-d-Y');
echo $exportedupdated;

include ("$themedir/_ct/{$post["type"]}.php");
?>
</div>
