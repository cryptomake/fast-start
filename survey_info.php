<?php
    require_once('include/common.inc.php');
    
    $email = getParameterFromPost('email');

    if (!empty($email))
    {
    	$surveys = findSurveysByEmail($email);
    }
?>