<?php
    use app\core\RouterCore;
<<<<<<< HEAD
    $this->get('/', function() {
        echo 'Home';
    });

    $this->get('/about/teste', function() {
        echo 'Estou na about teste';
=======

    $this->get('/', function() {
        (new app\controllers\UserController)->storage();
    });

    $this->get('/', function() {
        echo 'Home';
>>>>>>> 22f2de1d15b457737a8fb8dc69e5e61aae68c2b2
    });

    $this->get('/home', function() {
        echo 'Estou na home';
    });

<<<<<<< HEAD
    $this->get('/user', function() {
        (new app\controllers\UserController)->storage();
    });

    

=======
    $this->get('/about/teste', function() {
        echo 'Estou na about teste';
    });

>>>>>>> 22f2de1d15b457737a8fb8dc69e5e61aae68c2b2
?>