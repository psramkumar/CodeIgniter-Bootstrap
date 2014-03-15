<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="<?php echo $author; ?>">

    <title><?php echo $title; ?></title>

    <?php $statics = getIncludes(); ?>
    <?php foreach ($statics['css'] as $css): ?>
        <link rel="stylesheet" href="<?php echo $css ?>">
    <?php endforeach; ?>
    <?php if (isset($overcss)) { ?>
        <?php if (isset($overcss['css']) && sizeof($overcss['css']) > 0) { ?>
            <?php foreach ($overcss['css'] as $c): ?>
                <link rel="stylesheet" href="<?php echo $c ?>">
            <?php endforeach; ?>
        <?php } ?>

        <?php if (isset($overcss['css9']) && sizeof($overcss['css9']) > 0) { ?>
            <?php foreach ($overcss['css9'] as $c9): ?>
                <!--[if lt IE 9]>
                <link rel="stylesheet" href="<?php echo $c9 ?>"><![endif]-->
            <?php endforeach; ?>
        <?php } ?>
    <?php } ?>

</head>
<body>
