<?php
    namespace app\models;

    use app\core\Controller;
    use app\models\DB;

    class CRUD extends DB {
        public function index($table, $columns, $filters = '', $pag = '') {
            $sql = 'SELECT ' . $columns . ' FROM ' . $table;

            if($filters != '') {
                $sql = $sql . ' ' . $filters;
            }

            $sql = $sql . ';';

            $DB = new DB();
            $DB->connect();

            if($DB->connect()) {
				$this->query = mysqli_query($DB->connect(), $sql);
                $retornoArr = [];

                while($retorno = mysqli_fetch_assoc($this->query)) {
                    array_push($retornoArr, $retorno);
                }
                //dd($retornoArr);

                $loadView = new Controller();

                if($table == 'users') {
                    $loadView->loadView('users', $retornoArr);
                } elseif($table == 'cursos' && $pag == 'home') {
                    $loadView->loadView('home', $retornoArr);
                } elseif($table == 'cursos') {
                    $loadView->loadView('cursos', $retornoArr);
                }
                
			}
        }

        public function show($table, $columns, $filters, $pag) {
            $sql = 'SELECT ' . $columns . ' FROM ' . $table . ' ' . $filters . ';';
            
            $DB = new DB();
            $DB->connect();

            if($DB->connect()) {
				$this->query = mysqli_query($DB->connect(), $sql);
                $retorno = mysqli_fetch_assoc($this->query);
                //dd($retorno);

                $loadView = new Controller();
                $loadView->loadView($pag, $retorno);
			}
        }

        public function exists($table, $columns, $filters = '') {
            $sql = 'SELECT ' . $columns . ' FROM ' . $table . ' ' . $filters;
            //dd($sql);

            $DB = new DB();
            $DB->connect();

            if($DB->connect()) {
				$this->query = mysqli_query($DB->connect(), $sql);
                $retorno = mysqli_fetch_array($this->query);
                //dd($retorno[0]);

                if( isset($retorno[0]) ) {
                    return $retorno[0];
                } else {
                    return '';
                }                
			}
        }

        public function create($table, $data) {
            $columns = '';
            $values = '';

            foreach($data as $column => $value) {
                $columns .= $column . ", ";
                $values .= "'" . $value . "', ";
            }

            $columns = substr($columns, 0, -2);
            $values = substr($values, 0, -2);
            
            $sql = "INSERT INTO " . $table . " (" . $columns . ") VALUES (" . $values . ");";
            //dd($sql);

            $DB = new DB();
            $DB->connect();

            if($DB->connect()) {
				mysqli_query($DB->connect(), $sql);
                
                if($table == 'users') {
                    return header('Location: ' . DEFAULT_URL . 'user/index');
                } elseif($table == 'cursos') {
                    return header('Location: ' . DEFAULT_URL . 'cursos/index');
                }
                
			}
        }

        public function update($table, $data) {
            $columns = '';
            $values = '';
            $campos_valores = '';

            foreach($data as $column => $value) {
                if($column == 'id') {
                    continue;
                } elseif($column == 'img' && $value == '') {
                    continue;
                }

                $campos_valores .= $column . "='" . $value . "', ";
            }

            $campos_valores = substr($campos_valores, 0, -2);
            
            $sql = "UPDATE " . $table . " SET " . $campos_valores . " WHERE id = " . $data['id'];
            //dd($sql);

            $DB = new DB();
            $DB->connect();

            if($DB->connect()) {
				mysqli_query($DB->connect(), $sql);
                
                if($table == 'users') {
                    return header('Location: ' . DEFAULT_URL . 'user/index');
                } elseif($table == 'cursos') {
                    return header('Location: ' . DEFAULT_URL . 'cursos/index');
                }
			}
        }

        public function deleteConfirm($table, $filters, $id) {
            $sql = 'DELETE FROM ' . $table . ' ' . $filters;
            $extArr = ['jpg', 'jpeg', 'png', 'bmp'];

            $file = '../public/img_' . $table . '/' . $id;

            $DB = new DB();
            $DB->connect();

            if($DB->connect()) {
				$this->query = mysqli_query($DB->connect(), $sql);

                for($x = 0; $x < count($extArr); $x++) {
                    $file = $file . '.' . $extArr[$x];

                    // Exlui a imagem do usuário, caso exista
                    if (file_exists($file)) {
                        unlink($file);
                        continue;
                    }
                }

                if($table == 'users') {
                    return header('Location: ' . DEFAULT_URL . 'user/index');
                } elseif($table == 'cursos') {
                    return header('Location: ' . DEFAULT_URL . 'cursos/index');
                }
			}
        }

        public function lastID($table, $columns, $filters) {
            $sql = 'SELECT ' . $columns . ' FROM ' . $table . ' ' . $filters;
    
            $DB = new DB();
            $DB->connect();

            if($DB->connect()) {
				$this->query = mysqli_query($DB->connect(), $sql);
                $retorno = mysqli_fetch_array($this->query);
                //dd($retorno[0]);

                return $retorno[0];
			}
        }
    }
?>