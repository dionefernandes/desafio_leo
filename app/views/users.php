<?php
    include_once('../app/views/partials/header.php');
    include_once('../app/views/partials/navBar.php');    
?>

<section>
    <h1 class='title'>Lista de usuários</h1>
    
    <div class="content-right">
        <a href='cadastro' alt="Cadastrar novo usuário" title="Cadastrar novo usuário">
            <button type="submit" class="btn-forms"><i class="fas fa-plus"></i>&nbsp; Cadastrar</button>
        </a>
    </div>
    
    <table class='lista'>
        <thead>
            <tr>
                <th class='col-img-lista'>Imagem</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
    
        <?php
            for($x = 0; $x < count($params); $x++) {
                echo '
                    <tr>
                        <td class="col-img-lista"><img src="' . USERS_IMG . $params[$x]['img'] . '" alt="' . $params[$x]['nome'] . '" title="' . $params[$x]['nome'] . '" class="img-perfil-lista" /></td>
                        <td>' . $params[$x]['nome'] . '</td>
                        <td>' . $params[$x]['email'] . '</td>
                ';
        ?>
                <td class="lista-acoes">
                    <a href='show/<?php echo $params[$x]['id']; ?>' alt="Visualizar" title="Visualizar">
                        <i class="fas fa-search" alt="Visualizar" title="Visualizar"></i>
                    </a>

                    <a href='edit/<?php echo $params[$x]['id']; ?>' alt="Editar" title="Editar">
                        <i class="fas fa-edit" alt="Editar" title="Editar"></i> 
                    </a>

                    <a href='delete/<?php echo $params[$x]['id']; ?>' alt="Excluir" title="Excluir">
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