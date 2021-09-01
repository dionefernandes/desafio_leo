<?php
    namespace app\core;

    class Controller {

        // Carrega as views do projeto
        protected function loadView(string $view, $params = []) {
            $router = '../app/views/' . $view . '.php';
            $loader = '';
            
            if(file_exists($router))
                $loader = require_once($router);

            dd($params, false);

            return $loader;
        }
    }
?>