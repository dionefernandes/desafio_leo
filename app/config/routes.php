<?php
    use app\core\RouterCore;

    $this->get('/home', function() {
        echo 'Estou na home';
    });

    $this->get('/user/list', 'UserController@list');

    $this->get('/user/store', 'UserController@store');

    $this->get('/about/teste', function() {
        echo 'Estou na about teste';
    });

    $this->get('/', function() {
        echo 'Home';
    });

?>