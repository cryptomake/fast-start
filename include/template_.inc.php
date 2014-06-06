<?php
    function getView($tplName, $vars = array())
    {
        $smarty = new Smarty();
        $smarty->template_dir = TEMPLATE_DIR;
        $smarty->compile_dir = TEMPLATE_COMPILED_DIR;

        $smarty->assign($vars);

        return $smarty->fetch($tplName);
    }

    function buildLayout($tplName, $vars)
    {
    	$html = getView('header.html', $vars);
    	$html . = getView($tplName, $vars);
    	$html . = getView('footer.html', $vars);
    	return $html;
    }
?>