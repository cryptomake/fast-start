<?php
    require_once('/include/request.inc.php');
    
    $text = getParameterFromGet('text');
    echo trim($text, $character_mask = " ");
?>