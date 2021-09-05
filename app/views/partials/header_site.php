<?php include_once('../app/config/config.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
</head>
<body>
    <header>
        <div class="img-logo">
            <img src="<?php echo LOGO; ?>" alt="<?php echo SITE_FULL_NAME; ?>" title="<?php echo SITE_FULL_NAME; ?>" />
        </div>
        
        <div class="pesquisa">
            <form action="" method='POST' name="pesquisa-form">
                <input type="text" name="busca" id="busca" class="busca" />
                <input type="submit" value="Cadastrar" class="btn" />
            </form>
        </div>

        <div class="perfil">
            <img src="../public/users/img/1.jpg" alt="Nome do usuáro" title="Nome do usuáro" />
            
            <div class="boas-vindas_user">
                <div class="boas-vindas">
                    Seja bem vindo
                </div>

                <div class="nome_user">
                    <?php echo 'Nome do usuário'; ?>
                </div>
            </div>
        </div>
    </header>