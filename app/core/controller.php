<?php
    namespace app\core;

<<<<<<< HEAD
    use app\controllers\MessageController;

=======
>>>>>>> 22f2de1d15b457737a8fb8dc69e5e61aae68c2b2
    class Controller {

        // Carrega as views do projeto
        protected function loadView(string $view, $params = []) {
            $router = '../app/views/' . $view . '.php';
            $loader = '';
            
<<<<<<< HEAD
            if(file_exists($router)) {
                $loader = require_once($router);
            } else {
                $message = new MessageController();
                $message->message('Página não encontrada!', 'Verifique se informou a URL com seus parâmetros corretamente e tente novamente.', 404);
            }

            //dd($params, false);
=======
            if(file_exists($router))
                $loader = require_once($router);

            dd($params, false);
>>>>>>> 22f2de1d15b457737a8fb8dc69e5e61aae68c2b2

            return $loader;
        }
    }
?>