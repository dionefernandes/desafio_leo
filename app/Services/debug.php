<?php
    // Função para auxiliar o debug do código
    function dd($params = [], $die = true) {
        echo "<pre>";
        print_r($params);
        echo "</pre>";

        if($die)
            die();
    }
?>