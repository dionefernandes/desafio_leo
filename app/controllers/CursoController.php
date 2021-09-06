<?php
    namespace app\controllers;

    use app\core\Controller;
    use app\models\CRUD;

class CursoController extends Controller {
        public function __construct() 
        {
            //echo 'Curso retornardo';
        }

        public function index() {
            $table = 'cursos';
            $columns = '*';
            $filters = '';

            $CRUD = new CRUD();
            $CRUD->index($table, $columns, $filters);
        }

        public function showCurso($id) {
            $table = 'cursos';
            $columns = '*';
            $filters = 'WHERE id = ' . $id . ' LIMIT 1';
            $pag = 'show_curso';

            $CRUD = new CRUD();
            $CRUD->show($table, $columns, $filters, $pag);
        }

        public function store($data = []) {
            $table = 'cursos';

            $data = [
                'titulo' => $data['titulo'],
                'descricao' => $data['descricao'],
                'slideshow' => $data['slideshow'],
                'img' => $data['img'],
                'users_id' => $data['users_id'],
            ];

            $filters = "WHERE titulo = '" . $data['titulo'] . "' LIMIT 1";

            $retorno = $this->cursoExists($filters);

            if($retorno != '') {

                $errorArr = [
                    'code' => '',
                    'title' => 'Curso já cadastrado',
                    'message' => 'Este nomme de curso já está em uso. Defina um nome diferente.'
                ];

                $loadView = new Controller();
                $loadView->loadView('error', $errorArr);

                return false;
            }

            $CRUD = new CRUD();
            $CRUD->create($table, $data);
        }

        public function showEditCurso($id) {
            $table = 'cursos';
            $columns = '*';
            $filters = 'WHERE id = ' . $id . ' LIMIT 1';
            $pag = 'edit_curso';

            $CRUD = new CRUD();
            $CRUD->show($table, $columns, $filters, $pag);
        }

        public function update($data = []) {
            $table = 'cursos';
            
            $data = [
                'id' => $data['id'],
                'titulo' => $data['titulo'],
                'descricao' => $data['descricao'],
                'slideshow' => $data['slideshow'],
                'img' => $data['img'],
                'users_id' => $data['users_id'],
            ];

            $filters = "WHERE titulo = '" . $data['titulo'] . "' AND id <> " . $data['id'] . " LIMIT 1";

            $retorno = $this->cursoExists($filters);

            if($retorno != '') {

                $errorArr = [
                    'code' => '',
                    'title' => 'Curso já cadastrado',
                    'message' => 'Este nomme de curso já está em uso. Defina um nome diferente.'
                ];

                $loadView = new Controller();
                $loadView->loadView('error', $errorArr);

                return false;
            }

            $CRUD = new CRUD();
            $CRUD->update($table, $data);
        }

        public function cursoExists($filters) {
            $table = 'cursos';
            $columns = 'id';

            $CRUD = new CRUD();
            return $CRUD->exists($table, $columns, $filters);
        }

        public function deleteCurso($id)  {
            $table = 'cursos';
            $columns = '*';
            $filters = 'WHERE id = ' . $id . ' LIMIT 1';
            $pag = 'delete_curso';

            $CRUD = new CRUD();
            $CRUD->show($table, $columns, $filters, $pag);
        }

        public function deleteConfirm($id) {
            $table = 'cursos';
            $filters = 'WHERE id = ' . $id . ' LIMIT 1';

            $CRUD = new CRUD();
            $CRUD->deleteConfirm($table, $filters, $id);
        }

        public function lastID() {
            $table = 'cursos';
            $columns = 'id';
            $filters = 'ORDER BY id DESC LIMIT 1';

            $CRUD = new CRUD();
            return $CRUD->lastID($table, $columns, $filters);
        }

/***************************************************************************
Home
***************************************************************************/

        public function home() {
            $table = 'cursos';
            $columns = '*';
            $filters = '';
            $pag = 'home';

            $CRUD = new CRUD();
            $CRUD->index($table, $columns, $filters, $pag);
        }
    }
?>