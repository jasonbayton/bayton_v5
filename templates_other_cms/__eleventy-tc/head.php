<?php $randomnumber = mt_rand(100000,999999); ?>
<meta charset = "utf-8">
<title> Jason Bayton | <?php echo $post['title'];?></title>
<meta name = "description" content = "<?php if (!empty($post['subtitle'])) {
echo $post['subtitle']; } else { echo "The website of Jason Bayton"; }?>">
<meta name = "author" content = "Jason Bayton ">
<meta name="twitter:site" content="@jasonbayton" />
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:title" content="Jason Bayton | <?php echo $post['title'];?>"/>
<meta property="og:description" content="<?php echo $post['subtitle'];?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="https://<?php echo $domain;?>"/>
<meta property="og:image" content="<?php echo $themerelpath?>/img/bayton.webp"/>
<script src="<?php echo $themerelpath ?>/js/darkmode.js"></script>
<link rel = "stylesheet" href = "<?php echo $themerelpath ?>/css/core.css?v=<?php echo $randomnumber;?>">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link rel = "stylesheet" href = "<?php echo $themerelpath ?>/css/webfonts.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" crossorigin="anonymous"/>
