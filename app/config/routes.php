<?php
    use app\core\RouterCore;
    
    $id = extraiID(ACTUAL_URL);

    $this->get('/home', function() {
        echo 'Estou na home';
    });

    $this->get('/user/index', 'UserController@index');

    $this->get('/user/cadastro', function() {
        include('../app/views/cadastro_user.php');
    });

    $this->get('/user/show/' . $id, 'UserController@showUser@' . $id);

    $this->get('/user/store', 'UserController@store');

    $this->get('/about/teste', function() {
        echo 'Estou na about teste';
    });

    $this->get('/', function() {
        echo 'Home';
    });

?>