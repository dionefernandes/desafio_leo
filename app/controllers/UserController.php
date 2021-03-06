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
            $pag = 'show_user';

            $CRUD = new CRUD();
            $CRUD->show($table, $columns, $filters, $pag);
        }

        public function store($data = []) {
            $table = 'users';
            $senha = md5($data['senha']);

            $data = [
                'nome' => $data['nome'],
                'email' => $data['email'],
                'senha' => $senha ,
                'img' => $data['img'],
                'modal' => '',
            ];

            $filters = "WHERE email = '" . $data['email'] . "' LIMIT 1";

            $retorno = $this->userExists($filters);

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

        public function showEditUser($id) {
            $table = 'users';
            $columns = '*';
            $filters = 'WHERE id = ' . $id . ' LIMIT 1';
            $pag = 'edit_user';

            $CRUD = new CRUD();
            $CRUD->show($table, $columns, $filters, $pag);
        }

        public function update($data = []) {
            $table = 'users';
            $senha = '';

            if($data['senha'] != '') {
                $senha = md5($data['senha']);
            }
            
            $data = [
                'id' => $data['id'],
                'nome' => $data['nome'],
                'email' => $data['email'],
                'senha' => $senha ,
                'img' => $data['img'],
                'modal' => '',
            ];

            $filters = "WHERE email = '" . $data['email'] . "' AND id <> " . $data['id'] . " LIMIT 1";

            $retorno = $this->userExists($filters);

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
            $CRUD->update($table, $data);
        }

        public function userExists($filters) {
            $table = 'users';
            $columns = 'id';

            $CRUD = new CRUD();
            return $CRUD->exists($table, $columns, $filters);
        }

        public function deleteUser($id)  {
            $table = 'users';
            $columns = '*';
            $filters = 'WHERE id = ' . $id . ' LIMIT 1';
            $pag = 'delete_user';

            $CRUD = new CRUD();
            $CRUD->show($table, $columns, $filters, $pag);
        }

        public function deleteConfirm($id) {
            $table = 'users';
            $filters = 'WHERE id = ' . $id . ' LIMIT 1';

            $CRUD = new CRUD();
            $CRUD->deleteConfirm($table, $filters, $id);
        }

        public function lastID() {
            $table = 'users';
            $columns = 'id';
            $filters = 'ORDER BY id DESC LIMIT 1';

            $CRUD = new CRUD();
            return $CRUD->lastID($table, $columns, $filters);
        }
    }
?>