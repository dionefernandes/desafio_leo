<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_FULL_NAME; ?></title>
</head>
<body>
    <?php require_once('partials/header_site.php'); ?>

    Home do projeto

    <p><?php echo $params['Lista']; ?></p>

    <?php require_once('partials/footer.php'); ?>
</body>
</html>