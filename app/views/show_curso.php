<?php
    include_once('../app/views/partials/header.php');
    include_once('../app/views/partials/navBar.php');    
?>

<section>
    <h1 class='title'>Visualizar curso</h1>

    <div class="content-right">
        <a href='../index' alt="Lista de cursos" title="Lista de cursos">
            <button type="button" class="btn-forms"><i class="fas fa-list"></i>&nbsp; Litar cursos</button>
        </a>
    </div>

    <table class='lista'>
        <tr class='tr-branca'>
            <td colspan=2 class='td-branca'>
                <?php
                    echo '<img src="' . CURSOS_IMG . $params['img'] . '" alt="' . $params['titulo'] . '" title="' . $params['titulo'] . '" class="img-perfil-lista" />';
                ?>
            </td>
        <tr>
        <tr>
            <th>Código:</th>
            <td><?php echo $params['id'] ; ?></td>
        </tr>
        <tr>
            <th>Título:</th>
            <td><?php echo $params['titulo'] ; ?></td>
        </tr>
        <tr>
            <th>Descrição:</th>
            <td><?php echo $params['descricao'] ; ?></td>
        </tr>
        <tr>
            <th>Slideshow:</th>
            <td><?php echo $params['slideshow'] ; ?></td>
        </tr>
    </table>
</section>

<?php include_once('../app/views/partials/footer.php'); ?>