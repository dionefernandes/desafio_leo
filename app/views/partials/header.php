<?php include_once('../app/config/config.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="Shortcut Icon" type="image/x-icon" href="<?php echo FAVICON; ?>" />
    <link rel="stylesheet" href="<?php echo DEFAULT_CSS; ?>" />

    <title><?php echo SITE_NAME; ?></title>
</head>
<body>
    <header>
        <div class="img-logo">
            <img src='<?php echo LOGO; ?>' alt="<?php echo SITE_FULL_NAME; ?>" title="<?php echo SITE_FULL_NAME; ?>" />
        </div>
        
        <div class="pesquisa">
            <form action="" method='POST' name="pesquisa-form">
                <input type="text" name="busca" id="busca" class="busca" />
                <button type="submit" value="Cadastrar" class="btn-busca"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <div class="perfil">
            <img src="<?php echo USERS_IMG; ?>1.jpg" alt="Nome do usuáro" title="Nome do usuáro" class="img-perfil" />
            
            <div class="boas-vindas_user">
                <div class="boas-vindas">
                    Seja bem vindo
                </div>

                <div class="nome_user">
                    <?php echo 'Nome do usuário'; ?>
                </div>
            </div>
        </div>
        <div class="icone-menu">
            <i class="fas fa-sort-down"></i>
        </div>
    </header>