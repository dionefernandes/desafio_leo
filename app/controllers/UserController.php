<?php
    namespace app\controllers;
    use app\core\Controller;
    use app\models\CRUD;

class UserController extends Controller {
        public function __construct() 
        {
            //echo 'Usuário retornardo';
        }

        public function list() {
            $table = 'users';
            $columns = '*';
            $filters = '';

            $CRUD = new CRUD();
            $CRUD->index($table, $columns, $filters);
        }

        public function store() {
            $table = 'users';
            $data = [
                'nome' => 'Dione Rodrigues Fernandes',
                'email' => 'dionefernandes@gmail.com',
                'senha' => 'abc123',
                'img' => '../public/img_cursos/1.png',
                'modal' => '',
            ];

            $CRUD = new CRUD();
            $CRUD->create($table, $data);
        }
    }
?>