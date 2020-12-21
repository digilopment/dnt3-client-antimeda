<!doctype html>
<html lang="<?php echo $data['plugin_data']['frontend']->getMetaSetting($data, "language"); ?>">
    <head>
        <!-- Basic Page Needs==================================================-->
        <title><?php echo $data['title']; ?></title>
        <meta name="author" content="digilopment">
        <meta name="robots" content="index,follow" />
        <meta name="viewport" content="width=device-width" />
        <?php $favicon = $data['plugin_data']['settings']->getImage($data['meta_settings']['keys']['favicon']['value']); ?>
        <link rel="" type="img/x-icon" href="<?php echo $favicon; ?>" />
        <link rel="" type="img/png" href="<?php echo $favicon; ?>" />
        <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $favicon; ?>" />

        <link rel="stylesheet" href="<?php echo $data['media_path']; ?>css/plugins.css">
        <link href="<?php echo $data['media_path']; ?>css/style.css" rel="stylesheet">
        <link href="<?php echo $data['media_path']; ?>css/custom.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" id="jssDefault" href="<?php echo $data['media_path']; ?>css/green-style.css">
        <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/jquery.validate.js"></script>
    </head>
    <body>
        <div class="Loader"></div>
        <div class="wrapper">