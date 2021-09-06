<?php
    use app\core\RouterCore;
    
    $id = extraiID(ACTUAL_URL);

    // Página home
    $this->get('/home', 'CursoController@home');

    // Usuários
    $this->get('/user/index', 'UserController@index');

    $this->get('/user/create_user', function() {
        include('../app/views/create_user.php');
    });

    $this->get('/user/show_user/' . $id, 'UserController@showUser@' . $id);

    $this->get('/user/delete_user/' . $id, 'UserController@deleteUser@' . $id);

    $this->get('/user/deleteConfirm/' . $id, 'UserController@deleteConfirm@' . $id);

    $this->get('/user/store', 'UserController@store');

    $this->get('/user/showEditUser/' . $id, 'UserController@showEditUser@' . $id);

    $this->get('/user/update', 'UserController@update');

    // Cursos
    $this->get('/cursos/index', 'CursoController@index');

    $this->get('/cursos/create_curso', function() {
        include('../app/views/create_curso.php');
    });

    $this->get('/cursos/show_curso/' . $id, 'CursoController@showCurso@' . $id);

    $this->get('/cursos/delete_curso/' . $id, 'CursoController@deleteCurso@' . $id);

    $this->get('/cursos/deleteConfirm/' . $id, 'CursoController@deleteConfirm@' . $id);

    $this->get('/cursos/store', 'CursoController@store');

    $this->get('/cursos/showEditCurso/' . $id, 'CursoController@showEditCurso@' . $id);

    $this->get('/cursos/update', 'CursoController@update');
?>