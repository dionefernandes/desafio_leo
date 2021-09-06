<?php
    include_once('../app/views/partials/header.php');
    include_once('../app/views/partials/navBar.php');    
?>

<section>
    <h1 class='title'>Lista de cursos</h1>
    
    <div class="content-right">
        <a href='create_curso' alt="Cadastrar novo curso" title="Cadastrar novo curso">
            <button type="submit" class="btn-forms"><i class="fas fa-plus"></i>&nbsp; Cadastrar</button>
        </a>
    </div>
    
    <table class='lista'>
        <thead>
            <tr>
                <th class='col-img-lista'>Imagem</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Slideshow</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
    
        <?php
            for($x = 0; $x < count($params); $x++) {
                echo '
                    <tr>
                        <td class="col-img-lista"><img src="' . CURSOS_IMG . $params[$x]['img'] . '" alt="' . $params[$x]['titulo'] . '" title="' . $params[$x]['titulo'] . '" class="img-perfil-lista" /></td>
                        <td>' . $params[$x]['titulo'] . '</td>
                        <td>' . $params[$x]['descricao'] . '</td>
                        <td>' . $params[$x]['slideshow'] . '</td>
                ';
        ?>
                <td class="lista-acoes">
                    <a href='show_curso/<?php echo $params[$x]['id']; ?>' alt="Visualizar" title="Visualizar">
                        <i class="fas fa-search" alt="Visualizar" title="Visualizar"></i>
                    </a>

                    <a href='showEditCurso/<?php echo $params[$x]['id']; ?>' alt="Editar" title="Editar">
                        <i class="fas fa-edit" alt="Editar" title="Editar"></i> 
                    </a>

                    <a href='delete_curso/<?php echo $params[$x]['id']; ?>' alt="Excluir" title="Excluir">
                        <i class="fas fa-trash-alt" alt="Excluir" title="Excluir"></i>
                    </a>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
        </table>
</section>

<?php include_once('../app/views/partials/footer.php'); ?>