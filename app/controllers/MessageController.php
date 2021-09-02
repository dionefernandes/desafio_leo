<?php
    namespace app\controllers;
    use app\core\Controller;
    
    class MessageController extends Controller {
        public function message(string $title, string $message, $code) {
            if($code == '') {
                $code = http_response_code();

                if($code >= 200 && $code < 300)
                    $code = 404;
            }

            $errorArr = [
                'code' => $code,
                'title' => $title,
                'message' => $message
            ];

            $this->loadView('error', $errorArr);
        }
    }
?>