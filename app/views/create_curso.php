<?php
    include_once('../app/views/partials/header.php');
    include_once('../app/views/partials/navBar.php');    
?>

<section>
    <h1 class='title'>Cadastro de curso</h1>

    <form id="form_cadastro" name="form_cadastro" action="../cursos/store" method='POST' enctype="multipart/form-data" class='form'>
        <input type="hidden" name="modulo" id="modulo" value="cursos" />
        <input type="hidden" name="users_id" id="users_id" value="1" />

        <div class="col-form">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" tabindex=1 />
            </div>

            <div class="form-group">
                <label for="slideshow">Slideshow</label>
                <input type="text" name="slideshow" id="slideshow" class="form-control" tabindex=3 />
            </div>
        </div>

        <div class="col-form-r">
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" class="form-control"  tabindex=2 />
            </div>

            <div class="form-group">
                <label for="img">Imagem</label>
                <input type="file" name="img" id="img" class="form-control" tabindex=4 />
            </div>
        </div>

        <div class="content-right">
            <a href='index' alt="Lista de cursos" title="Lista de cursos">
                <button type="button" class="btn-forms" tabindex=5>
                    <i class="fas fa-list"></i>&nbsp; Litar cursos
                </button>
            </a>
            
            <button type="button" class="btn-forms" alt="Cadastrar curso" title="Cadastrar curso"  onClick="envia_cadastro()" tabindex=6>
                <i class="fas fa-plus"></i>&nbsp; Cadastrar
            </button>
        </div>
    </form>

    <script type="text/javascript" src="http://localhost/desafio_leo/public/js/create_curso.js"></script>
</section>

<?php include_once('../app/views/partials/footer.php'); ?>