<?php
    namespace app\core;

    use app\controllers\MessageController;

    class Controller {

        // Carrega as views do projeto
        protected function loadView(string $view, $params = []) {
            $router = '../app/views/' . $view . '.php';
            $loader = '';
            
            if(file_exists($router)) {
                $loader = require_once($router);
            } else {
                $message = new MessageController();
                $message->message('Página não encontrada!', 'Verifique se informou a URL com seus parâmetros corretamente e tente novamente.', 404);
            }

            //dd($params, false);

            return $loader;
        }
    }
?>