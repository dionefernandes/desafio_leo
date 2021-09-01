<?php
    use app\core\RouterCore;

    $this->get('/', function() {
        (new app\controllers\UserController)->storage();
    });

    $this->get('/', function() {
        echo 'Home';
    });

    $this->get('/home', function() {
        echo 'Estou na home';
    });

    $this->get('/about/teste', function() {
        echo 'Estou na about teste';
    });

?>