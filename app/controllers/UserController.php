<?php
    namespace app\controllers;
    use app\core\Controller;
    
    class UserController extends Controller {
        public function __construct() 
        {
            //echo 'Usuário retornardo';
        }

        public function storage() {
            $this->loadView('home', [
                    'Lista' => 'Lista de usuários'
                ]
            );
        }
    }
?>