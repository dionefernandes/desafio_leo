<?php
    namespace app\core;

    use app\controllers\MessageController;

    class RouterCore {
        private $uri;
        private $method;
        private $getArr = [];

        public function __construct() {
            $this->initialize();
            
            // Incorpora as rotas do projeto
            require_once('../app/config/routes.php');

            $this->execute();
        }

        private function initialize() {
            //dd($_SERVER);
            $this->method = $_SERVER['REQUEST_METHOD'];

            $uri = $_SERVER['REQUEST_URI'];
            $exp_uri = explode('/', $uri);
            $this->uri = implode('/', $this->normalizeURI($exp_uri));
        }

        public function get($router, $call) {
            $this->getArr[] = [
                'router' => $router,
                'call' => $call
            ];
        }

        private function execute() {
            switch($this->method) {
                case 'GET':
                    $this->executeGet();
                    break;

                case 'POST';
                    
                break;
            }
                
        }

        private function executeGet() {
            foreach($this->getArr as $get) {
                //dd($get, false);

                $router = substr($get['router'], 1);
                
                // Remove a barra do final, caso exista
                if(substr($router, -1) == '/') 
                    $router = substr($router, 0, -1);
                
                // Verifica a existência da rota e se é uma função
                if( $router == $this->uri) {
                    if(is_callable( $get['call'] )) {
                        $get['call']();
                        break;
                    } else {
                        $this->executeController($get['call']);
                    }
                }
            }
        }

        private function executeController($get) {
            $exp_get = explode('@', $get);
            $class = $exp_get[0];
            $method = $exp_get[1];
            $arg = '';

            if(isset($exp_get[2])) {
                $arg = $exp_get[2];
            }
            
            if($class == '' || $method == '') {
                $message = new MessageController();
                $message->message('Dados inválidos', 'A requisição não pode ser retornada porque esta funcionalidade e/ou os métodos solicitados não existem.', 404);
                return;
            }
            
            $class_contoller = 'app\\controllers\\' . $class;

            if(!class_exists($class_contoller)) {
                $message = new MessageController();
                $message->message('Dados inválidos', 'Cotroller não encontrada.', 404);
                return;
            }

            if(!method_exists($class_contoller, $method)) {
                $message = new MessageController();
                $message->message('Dados inválidos', 'Método não encontrado.', 404);
                return;
            }
            
            //dd($class_contoller . ' - ' . $method . ' - ' . $param);
/*
            call_user_func_array([
                new $class_contoller,
                $method
            ], []);
*/
            call_user_func_array([new $class_contoller, $method], [$arg]);
        }


        private function normalizeURI($arr) {
            // Remove os índices vazios
            $arr = array_filter($arr);

            // Remove o diretório raiz do projeto
            unset($arr[1]);

            // Reorganiza a lista e retorna
            return array_values($arr);
        }
    }
?>