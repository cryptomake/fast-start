<?php
    require_once('include/common.inc.php');
    $vars = array
    (
        'floor' => array('Laminate', 'Parket', 'Linoleum')
    );

    echo getView('form_floor.html', $vars);
?>