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

        private function get($router, $call) {
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
                if( $router == $this->uri && is_callable($get['call']) ) {
                    $get['call']();
                    break;
                } else {
                    $message = new MessageController();
                    $message->message('Erro de funcionalidade', 'A requisição feita não pode ser retornada porque esta funcionalidade e/ou os métodos solicitados não existem.', '');
                    break;
                }
            }
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