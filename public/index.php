<?php
    use app\core;
    use app\controllers\UserController;
    
    require_once("..\app\config\config.php");
    
    new \app\core\RouterCore();

    $user = new UserController();
?>