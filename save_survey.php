<?php
    require_once('include/common.inc.php');

    $surveyInfo = getSurveyInfoFromRequest();
    saveSurveyInfo($surveyInfo);
?>