<?php
    use app\controllers\UserController;
    
    require_once("..\app\config\config.php");

    echo SITE_FULL_NAME . "<br>";

    $user = new UserController();
?>