<?php
    // Extrai o id enviado pela url
    function extraiID($uri) {
        $exp_uri = explode('/', $uri);
        $count_uri = count($exp_uri) -1;
        $id = $exp_uri[$count_uri];

        return $id;
    }
?>