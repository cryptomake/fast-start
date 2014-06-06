<?php
    function saveSurveyInfo($surveyInfo)
    {
    	$query = "INSERT INTO survey SET first_name = '" . dbQoute($surveyInfo['first_name']) . "', last_name = '" . dbQoute($surveyInfo['last_name']) . "' ";
    }

    if (dbQuery($query))
    {
    	$surveyInfo['id'] = dbGetLastInsertId();
    }

    function findSurveysByEmail($email)
    {
        $query = "SELECT *FROM survey WHERE email LIKE '%" . dbQuote($email) . "%'";
        return dbQueryGetResult($query);
    }
?>