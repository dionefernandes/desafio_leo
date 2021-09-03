<?php
    namespace app\models;

    use app\core\Controller;
    use app\models\DB;

    class CRUD extends DB {
        public function index($table, $columns, $filters = '') {
            $sql = 'SELECT ' . $columns . ' FROM ' . $table;

            if($filters != '') {
                $sql = $sql . ' ' . $filters;
            }

            $sql = $sql . ';';

            $DB = new DB();
            $DB->connect();

            if($DB->connect()) {
				$this->query = mysqli_query($DB->connect(), $sql);
                //$retorno = mysqli_fetch_assoc($this->query);
                $retornoArr = [];

                while($retorno = mysqli_fetch_assoc($this->query)) {
                    array_push($retornoArr, $retorno);
                }
                //dd($retornoArr);

                $loadView = new Controller();
                $loadView->loadView('users', $retornoArr);
			}
        }

        public function create($table, $data) {
            $columns = '';
            $values = '';

            foreach($data as $column => $value) {
                if($column == 'senha') {
                    $columns .= $column . ", ";
                    $values .= "'" . md5($value) . "', ";
                } else {
                    $columns .= $column . ", ";
                $values .= "'" . $value . "', ";
                }
            }

            $columns = substr($columns, 0, -2);
            $values = substr($values, 0, -2);
            
            $sql = "INSERT INTO " . $table . " (" . $columns . ") VALUES (" . $values . ");";

            $DB = new DB();
            $DB->connect();

            if($DB->connect()) {
				mysqli_query($DB->connect(), $sql);
                
                return header('Location: ' . DEFAULT_URL . 'user/list');
			}
        }
    }
?>