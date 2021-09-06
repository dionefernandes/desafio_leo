<?php
    include_once('../app/views/partials/header.php');
    include_once('../app/views/partials/navBar.php');    
?>

<section>
    <h1 class='title'>Cadastro de usuário</h1>

    <form id="form_cadastro" name="form_cadastro" action="../user/store" method='POST' enctype="multipart/form-data" class='form'>
        <input type="hidden" name="modulo" id="modulo" value="users" />

        <div class="col-form">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" tabindex=1 />
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" tabindex=3 />
            </div>
        </div>

        <div class="col-form-r">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control"  tabindex=2 />
            </div>

            <div class="form-group">
                <label for="img">Imagem</label>
                <input type="file" name="img" id="img" class="form-control" tabindex=4 />
            </div>
        </div>

        <div class="content-right">
            <a href='index' alt="Lista de usuários" title="Lista de usuários">
                <button type="button" class="btn-forms" tabindex=5>
                    <i class="fas fa-list"></i>&nbsp; Litar usuários
                </button>
            </a>
            
            <button type="button" class="btn-forms" alt="Cadastrar usuário" title="Cadastrar usuário"  onClick="envia_cadastro()" tabindex=6>
                <i class="fas fa-plus"></i>&nbsp; Cadastrar
            </button>
        </div>
    </form>

    <script type="text/javascript" src="http://localhost/desafio_leo/public/js/create_user.js"></script>
</section>

<?php include_once('../app/views/partials/footer.php'); ?>