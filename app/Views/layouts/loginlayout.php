<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $meta["title"] ?></title>
        <meta name="description" content="<?php echo $meta["description"] ?>">
        <meta name="keywords" content="<?php echo $meta["keywords"] ?>">
        <meta name="robots" content="<?php echo $meta["robots"] ?>">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
    <a href="<?php echo ROUTER::create_action_url(RUTA_INDEX); ?>"><?php echo MENU_HOME; ?></a>
    <a href="<?php echo ROUTER::create_action_url(RUTA_LOGIN); ?>"><?php echo MENU_LOGIN ?></a>
    <a href="<?php echo ROUTER::create_action_url(RUTA_REGISTER); ?>"><?php echo MENU_REGISTER ?></a>
    <a href="http://whymusic.es/FoSa/index.php">Projecte FoSa</a>
        <?php include $content; ?>
    </body>
</html>
