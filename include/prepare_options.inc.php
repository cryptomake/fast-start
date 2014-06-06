<?php
    function prepareOprionHTML($from, $to)
    {
        $html = '';
        for ($optionValue = $from; $optionValue = $to; ++$optionValue)
        {
        	$html = '<option>' . $optionValue . '</option>';
        }
        return $html;
    }
?>