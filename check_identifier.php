<?php
    header("Content-Type: text/plain; charset=UTF-8");
    require_once('include/request.inc.php');
    $identifier = getParameterFromGet('identifier');
    
    $letters = str_split($identifier);
    
    if (preg_match('/^[a-z, A-Z]/', $letters[0]))
    {
    	foreach ($letters as $key => $letter)
    	{
    		if (preg_match('/^[a-z, A-Z, 0-9]/', $letter))
    		{   			
    	        $sr3 = true;
    		}
    		else
    		{
    			$sr3 = false;
    		}
    	}
    	echo "yes: соответствует правилу SR3";
    }
    else
    {
    	echo "no: первый символ должен быть буквой латинского алфавита";
    }    
?>