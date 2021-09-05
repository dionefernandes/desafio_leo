<?php
    namespace app\controllers;

    use app\core\Controller;
    use app\models\CRUD;

class UserController extends Controller {
        public function __construct() 
        {
            //echo 'Usuário retornardo';
        }

        public function index() {
            $table = 'users';
            $columns = '*';
            $filters = '';

            $CRUD = new CRUD();
            $CRUD->index($table, $columns, $filters);
        }

        public function showUser($id) {
            $table = 'users';
            $columns = '*';
            $filters = 'WHERE id = ' . $id . ' LIMIT 1';

            $CRUD = new CRUD();
            $CRUD->show($table, $columns, $filters);
        }

        public function store() {
            $table = 'users';
            $data = [
                'nome' => 'Daniele Duarte dos Santos Fernandes',
                'email' => 'danieleduarte@gmail.com',
                'senha' => 'abc123',
                'img' => '3.jpg',
                'modal' => '',
            ];

            $retorno = $this->userExists($data['email']);

            if($retorno != '') {

                $errorArr = [
                    'code' => '',
                    'title' => 'Usuário já cadastrado',
                    'message' => 'Este endereço de e-mail já está sendo utilizado por outro usuário.'
                ];

                $loadView = new Controller();
                $loadView->loadView('error', $errorArr);

                return false;
            }

            $CRUD = new CRUD();
            $CRUD->create($table, $data);
        }

        public function userExists($filters) {
            $table = 'users';
            $columns = 'id';
            $filters = "WHERE email = '" . $filters . "' LIMIT 1";

            $CRUD = new CRUD();
            return $CRUD->exists($table, $columns, $filters);
        }
    }
?>