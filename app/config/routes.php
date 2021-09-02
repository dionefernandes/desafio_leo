<?php
    use app\core\RouterCore;
    $this->get('/', function() {
        echo 'Home';
    });

    $this->get('/about/teste', function() {
        echo 'Estou na about teste';
    });

    $this->get('/home', function() {
        echo 'Estou na home';
    });

    $this->get('/user', function() {
        (new app\controllers\UserController)->storage();
    });

    

?>