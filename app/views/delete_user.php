<?php
    include_once('../app/views/partials/header.php');
    include_once('../app/views/partials/navBar.php');    
?>

<section>
    <h1 class='title'>Excluir usuário</h1>

    <table class='lista'>
        <tr class='tr-branca'>
            <td colspan=2 class='td-branca'>
                <?php
                    echo '<img src="' . USERS_IMG . $params['img'] . '" alt="' . $params['nome'] . '" title="' . $params['nome'] . '" class="img-perfil-lista" />';
                ?>
            </td>
        <tr>
        <tr>
            <th>Código:</th>
            <td><?php echo $params['id'] ; ?></td>
        </tr>
        <tr>
            <th>Nome:</th>
            <td><?php echo $params['nome'] ; ?></td>
        </tr>
        <tr>
            <th>E-mail:</th>
            <td><?php echo $params['email'] ; ?></td>
        </tr>
        <tr>
            <th>Modal:</th>
            <td>
                <?php
                    if($params['modal'] == '') {
                        echo 'Ainda não visualizou a modal';
                    } else {
                        echo 'Já visualizou a modal';
                    }
                ?>
            </td>
        </tr>
    </table>
    
    <div class="content-right">
        <a href='../index' alt="Lista de usuários" title="Lista de usuários">
            <button type="button" class="btn-forms"><i class="fas fa-list"></i>&nbsp; Litar usuários</button>
        </a>

        <button type="button" class="btn-danger" onclick="confirm_deleteUser('<?php echo $params['id'] ; ?>');">
            <i class="fas fa-trash-alt" alt="Excluir usuário" title="Excluir usuário"></i>&nbsp; Excluir usuário
        </button>
    </div>

    <script type="text/javascript" src="http://localhost/desafio_leo/public/js/delete_user.js"></script>
</section>

<?php include_once('../app/views/partials/footer.php'); ?>