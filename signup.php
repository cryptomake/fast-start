<?php
  header("Content-Type: text/plain");
  require_once('include/common.inc.php');

  $firstName = getParameterFromPost('first_name');
  $lastName = getParameterFromPost('last_name');
  if (isset($_FILES['avatar']))
  {
  	  var_dump($_FILES['avatar']);
  }

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