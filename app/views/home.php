<?php
    include_once('../app/views/partials/header.php');
    include_once('../app/views/partials/navBar.php');    
?>

<section class='section-slide'>
    <img id="slideshow" />

    <div class='card-slide'>
        <h2><?php echo $params[0]['titulo']; ?></h2>
        <p><?php echo $params[0]['descricao']; ?></p>
        <div class='content-btn'>
            <a href='cursos/show_curso/<?php echo $params[0]['id']; ?>' alt="Ver curso" title="Ver curso">
                <button type="submit" class="btn-slide">Ver curso</button>
            </a>
        </div>
    </div>
</section>

<section class='home'>
    <h1 class='title_home'>Home</h1>

    <!-- <a href="#openModal" id='btn-modal'>Open Modal</a> -->

    <div id="openModal" class="modalDialog">
        <div>
            <a href="home" title="Close" id='close' class="close">X</a>

            <img src="http://localhost/desafio_leo/public/images/modal.jpg" alt="Topo modal" title="Topo modal" />
            <h2>Egestas tortor bulputate</h2>
            <p>
                Aenean eu leo quam. Pallentesque omare sem lacinia quam venenais vetibulum.<br />
                Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Cras
            </p>
            <div class='content-btn'>
                <a href='cursos/show_curso/<?php echo $params[$x]['id']; ?>' alt="Ver curso" title="Ver curso">
                    <button type="submit" class="btn-modal">Inscreva-se</button>
                </a>
            </div>
        </div>
    </div>

    <div class='content-cursos'>
        <?php for($x = 0; $x < count($params); $x++) { ?>
        <div class='card-cursos'>
            <img src="<?php echo CURSOS_IMG . $params[$x]['img']; ?>" alt="<?php echo $params[$x]['titulo']; ?>" title="<?php echo $params[$x]['titulo']; ?>" />
            <h2><?php echo $params[$x]['titulo']; ?></h2>
            <p><?php echo $params[$x]['descricao']; ?></p>

            <div class='content-btn'>
                <a href='cursos/show_curso/<?php echo $params[$x]['id']; ?>' alt="Ver curso" title="Ver curso">
                    <button type="submit" class="btn_cursos">Ver curso</button>
                </a>
            </div>
        </div>
        <?php } ?>
        
        <div class='card-cursos'>
            <a href='cursos/create_curso' alt="Ver curso" title="Ver curso">
                <img src="<?php echo DEFAULT_IMG . 'adicionar_curso.jpg'; ?>" alt="Adicionar curso" title="Adicionar curso" class="img-perfil-lista" />
            </a>
        </div>
    </div>
</section>

<script type="text/javascript" src="http://localhost/desafio_leo/public/js/slideshow.js"></script>
<script type="text/javascript" src="http://localhost/desafio_leo/public/js/modal.js"></script>

<?php include_once('../app/views/partials/footer.php'); ?>