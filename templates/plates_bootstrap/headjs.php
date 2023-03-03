<head>
    <!-- meta character set -->
    <meta charset="utf-8">
    <title><?=$view['title'] ?></title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Meta Description -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?=$view['description'] ?>">
    <meta name="author" content="<?=$view['author'] ?>">
    <meta name="keywords" content="flare, flare networks, servers, node, unleashing value, linux, docker, asclinux, linux for php, lfphp">
    <link rel="icon" href="<?=$view['favicon'] ?>">

    <link rel="apple-touch-icon" href="<?=$view['urlbaseaddr'] ?>apple-touch-icon.png">
    <meta name="generator" content="LightMVC & Themefisher Kross Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="kross" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=$view['favicon'] ?>">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=$view['urlbaseaddr'] ?>plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="<?=$view['urlbaseaddr'] ?>plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="<?=$view['urlbaseaddr'] ?>plugins/themify-icons/themify-icons.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?=$view['urlbaseaddr'] ?>css/style.css">
    <link rel="stylesheet" href="<?=$view['urlbaseaddr'] ?>css/main.css">

    <?php foreach($view['css'] as $key => $value): ?>
        <link href="<?php echo $value ?>" rel="stylesheet">
    <?php endforeach; ?>

    <?php foreach($view['jshead'] as $key => $value): ?>
        <script src="<?php echo $value ?>"></script>
    <?php endforeach; ?>

    <?php foreach($view['jsscriptshead'] as $key => $value): ?>
        <?php echo $value ?>
    <?php endforeach; ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=$view['urlbaseaddr'] ?>js/html5shiv.min.js"></script>
      <script src="<?=$view['urlbaseaddr'] ?>js/respond.min.js"></script>
    <![endif]-->
</head>
