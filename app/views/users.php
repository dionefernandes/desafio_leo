<?php
    for($x = 0; $x < count($params); $x++) {
        echo '<p>' . $params[$x]['nome'] . '</p>';
        echo '<p>' . $params[$x]['email'] . '</p>';
        echo '<p>' . $params[$x]['img'] . '</p>';
        echo "<br />";
    }
?>