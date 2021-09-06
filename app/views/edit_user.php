<?php
    include_once('../app/views/partials/header.php');
    include_once('../app/views/partials/navBar.php');    
?>

<section>
    <h1 class='title'>Atualização de cadastro de usuário</h1>
    
    <form id="form_cadastro" name="form_cadastro" action="../user/update" method='POST' enctype="multipart/form-data" class='form'>
        <input type="hidden" name="modulo" id="modulo" value="users" />
        <input type="hidden" name="id" id="id" value="<?php echo $params['id'] ; ?>" />

        <div class='img-show-edit'>
            <?php
                echo '<img src="' . USERS_IMG . $params['img'] . '" alt="' . $params['nome'] . '" title="' . $params['nome'] . '" class="img-perfil-lista" />';
            ?>
        </div>
        
        <div class="col-form">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $params['nome'] ; ?>" class="form-control" tabindex=1 />
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" tabindex=3 />
            </div>
        </div>

        <div class="col-form-r">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" value="<?php echo $params['email'] ; ?>" class="form-control"  tabindex=2 />
            </div>

            <div class="form-group">
                <label for="img">Imagem</label>
                <input type="file" name="img" id="img" class="form-control" tabindex=4 />
            </div>
        </div>

        <div class="content-right">
            <a href='../index' alt="Lista de usuários" title="Lista de usuários">
                <button type="button" class="btn-forms" tabindex=5>
                    <i class="fas fa-list"></i>&nbsp; Litar usuários
                </button>
            </a>
            
            <button type="button" class="btn-forms" alt="Atualizar usuário" title="Atualizar usuário"  onClick="envia_cadastro()" tabindex=6>
                <i class="fas fa-edit"></i>&nbsp; Atualizar
            </button>
        </div>
    </form>

    <script type="text/javascript" src="http://localhost/desafio_leo/public/js/edit_user.js"></script>
</section>

<?php include_once('../app/views/partials/footer.php'); ?>